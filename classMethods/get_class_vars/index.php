<?php
class Dog
{
    public $name;
    public $age;

    public function __construct()
    {
    }

    public function run()
    {
    }
}

//获取类的所有属性
var_dump(get_class_vars(Dog::class));

//array (size=2)
//  'name' => null
//  'age' => null

