<?php

abstract class DomainObject
{
    public static function create()
    {
        //static 指向的是调用该方法时的类。实现延迟静态绑定
        return new static;
    }
}

class User extends DomainObject
{

}

class Document extends DomainObject
{

}


$user = User::create();

var_dump($user);

$document = Document::create();

var_dump($document);