<?php
class Person
{
    public $name = 'suhuazizi';

    public function __construct($name)
    {
        $this->name = $name;
    }
}

interface Module
{
    public function execute();
}

class FtpModule implements Module
{
    protected $host;
    protected $user;

    public function setHost($host)
    {
        echo 'FtpModule::setHost host:'.$host .'<br>';
    }

    public function setUser($user)
    {
        echo 'FtpModule::setUser user:'.$user .'<br>';
    }

    public function execute()
    {
        //在这里执行一些操作
    }
}

class PersonModule implements Module
{
    public function setPerson(Person $person)
    {
        echo 'PersonModule::setPerson name:'.$person->name .'<br>';
    }

    public function execute()
    {
        //在这里执行一些操作
    }
}

class ModuleRunner
{
    protected $config = [
        'FtpModule' => [
            'host' => 'http://www.baidu.com',
            'user' => 'admin'
        ],
        'PersonModule' => [
            'person' => 'bob'
        ]
    ];

    protected $modules = [];

    public function init()
    {
        $interface = new ReflectionClass(Module::class);

        foreach ($this->config as $module => $params) {
            $module = new ReflectionClass($module);

            //ReflectionClass::isSubclassOf
            if (!$module->isSubclassOf($interface)) {
                throw new \InvalidArgumentException('该模块必须实现 Module 接口');
            }

            //返回该类的一个实例 ReflectionClass::newInstance
            $instance = $module->newInstance();

            foreach ($module->getMethods() as $method) {
                $this->handleMethod($instance, $method, $params);
            }

            array_push($this->modules, $interface);
        }
    }

    public function handleMethod(Module $module, ReflectionMethod $method,  $params)
    {
        $name = $method->getName();
        $args = $method->getParameters(); //ReflectionMethod::getParameters

        if (count($args) != 1 || substr($name, 0, 3) != 'set') {
            return false;
        }

        $property = strtolower(substr($name, 3));

        if(!isset($params[$property])) {
            return false;
        }

        //通过参数，获取它所属的类（只有是对象类型才会有值返回）ReflectionParameter::getClass
        $argClass = $args[0]->getClass();

        if ($argClass) {
            //执行该方法 ReflectionMethod::invoke(object, mixed paramter...)
            $method->invoke($module, $argClass->newInstance($params[$property]));
        } else {
            $method->invoke($module, $params[$property]);
        }
    }
}


$runner = new ModuleRunner();
$runner->init();





























