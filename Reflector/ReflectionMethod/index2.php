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


$reflector = new ReflectionMethod(Dog::class, 'getDogs');

var_dump($reflector); //ReflectionMethod

var_dump($reflector->getName());

var_dump($reflector->isPublic());
var_dump($reflector->isProtected());
var_dump($reflector->isPrivate());

var_dump($reflector->isStatic());
var_dump($reflector->isFinal());

var_dump($reflector->isConstructor());


























