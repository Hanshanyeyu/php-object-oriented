<?php
class Person
{
    private $name = 'default';
    private $age = 0;

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

    public function getName()
    {
        return 'suhua';
    }

    public function getAge()
    {
        return 26;
    }

    /**
     * 当调用一个不存在或者不可以方法时，那么该方法会被调用
     * 以下示例是把属性当成方法的形式进行调用
     * @param $name
     * @param $arguments
     * @return string
     */
    public function __call($name, $arguments)
    {
        if(property_exists($this, $name)) {
            return $this->$name;
        }
    }

}

$person = new Person();

var_dump($person->name());
var_dump($person->age());

var_dump($person);