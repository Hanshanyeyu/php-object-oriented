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
        //对克隆对象中的引用也克隆一份，防止克隆对象对引用对象操作而影响到原来的对象
        $this->account = clone $this->account;
    }
}

$person1 = new Person(new Account(100));
$person1->setId(1);

var_dump($person1);

$person2 = clone $person1;

var_dump($person2);

$person2->account->balance -= 50;

var_dump($person1);
var_dump($person2);