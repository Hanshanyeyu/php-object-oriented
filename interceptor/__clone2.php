<?php
class Account
{
    public $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

}


class Person
{
    private $id;
    public $account;

    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id = 0;
    }
}

$person1 = new Person(new Account(100));
$person1->setId(1);

var_dump($person1);

$person2 = clone $person1;

var_dump($person2);

//被复制中的对象引用也被传递了，所以会影响到原来的对象
$person2->account->balance -= 50;

var_dump($person1);
var_dump($person2);