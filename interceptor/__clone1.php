<?php
class Person
{
    private $id;

    public function setId($id)
    {
        $this->id = $id;

    }

    public function __clone()
    {
        $this->id = 0;
    }
}

$person1 = new Person();
$person1->setId(100);

var_dump($person1);

$person2 = clone $person1;

var_dump($person2);

$person2->setId(200);

var_dump($person1);
var_dump($person2);