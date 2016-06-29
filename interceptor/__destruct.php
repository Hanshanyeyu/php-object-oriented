<?php
class Person
{
    private $name;
    private $age;
    private $id;

    /**
     * 当调用该类不存在的属性时，那么该方法就会被调用，并且该方法所返回的值则为该属性的值
     * @param $name
     */
    public function __get($name)
    {
        $method = 'get'.ucfirst($name);

        if(method_exists($this, $method)) {
            return $this->$method();
        }
    }

    /**
     * 当给一个不存在或不能访问的属性，设置一个值时，该方法会被调用
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $method = 'set'.ucfirst($name);

        if(method_exists($this, $method)) {
            return $this->$method($value);
        }
    }

    public function setName($name)
    {
        $this->name = strtoupper($name);
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return 'suhua';
    }

    public function getAge()
    {
        return 26;
    }

    public function __destruct()
    {
        if ($this->id) {
            print '保存Person 对象';
        }
    }
}

$person = new Person();

$person->setId(10086);

unset($person);

echo 'suhua';