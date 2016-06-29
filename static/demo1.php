<?php
class User
{
    public static function create()
    {
        return new self;
    }
}

class Document
{
    public static function create()
    {
        return new self;
    }
}


$user = User::create();

var_dump($user);

$document = Document::create();

var_dump($document);