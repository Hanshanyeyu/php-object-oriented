<?php

abstract class DomainObject
{
    private $group;

    public function __construct()
    {
        //使用static，表示调用该方法时的类本身。如果子类进行了覆盖，那么实例化子类时，则会调用子类的 getGroup 方法
        $this->group = static::getGroup();
    }

    public static function create()
    {
        //static 指向的是调用该方法时的类。实现延迟静态绑定
        return new static;
    }

    public static function getGroup()
    {
        return 'default';
    }
}

class User extends DomainObject
{

}

class Document extends DomainObject
{
    public static function getGroup()
    {
        return 'document';
    }
}

class Computer extends Document
{
    public static function getGroup()
    {
        return 'computer';
    }
}


$user = User::create();

var_dump($user);

$document = Document::create();

var_dump($document);

$computer = Computer::create();

var_dump($computer);