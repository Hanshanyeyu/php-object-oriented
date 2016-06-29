<?php
class Person
{
    private $name;
    private $age;

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
     * __toString 方法一般用于传递信息的类，比如 Exception 类。该方法会在使用 echo/print 进行打印时，被调用
     * @return string
     */
    public function __toString()
    {
        $str = $this->getName();
        $str .= '('.$this->getAge().')';

        return $str;
    }
}

$person = new Person();

var_dump($person);

echo $person;