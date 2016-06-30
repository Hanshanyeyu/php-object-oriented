<?php
class Dog
{
    public $name;
    private $age;
    protected $sex;

    const IS_DELETED = false;

    public static $dogs = [];

    public function __construct($name, $age)
    {
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    protected function handleAge()
    {

    }

    private function setName()
    {

    }

    public static function getDogs()
    {
        return [];
    }
}


$reflector = new ReflectionClass(Dog::class);

$reflectorMethods = $reflector->getMethods();

var_dump($reflectorMethods);


























