<?php
class Person
{
    private $id;

    public function setId($id)
    {
        $this->id = $id;

    }
}

$person1 = new Person();
$person1->setId(100);

var_dump($person1);

//对象是按照引用传递的，所有 person1 和 person2 都指向同一个对象，所以做得更改会影响到所有
$person2 = $person1;

$person2->setId(200);

var_dump($person1);
var_dump($person2);