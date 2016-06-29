<?php

abstract class DomainObject
{
    public static function create()
    {
        //self 指向的是当前类，而非子类。所以在子类继承并调用时，会出错。
        return new self;
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