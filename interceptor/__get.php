<?php
class Person
{
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

    public function getName()
    {
        return 'suhua';
    }

    public function getAge()
    {
        return 26;
    }
}

$person = new Person();

var_dump($person->name);

var_dump($person->age);

var_dump($person->notfound);