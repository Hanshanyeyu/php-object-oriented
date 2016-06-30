<?php
class Person
{
    private $writer;

    public function __construct($writer)
    {
        $this->writer = $writer;
    }

    /**
     * 利用 __call 方法实现委托方法，把一些数据的处理交给第三方。看起来，这些第三方法就是该对象本身的方法一样
     * 当这种做法会使程序更加复杂
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this->writer, $name)) {
            //注意call_user_func_array的利用
            call_user_func_array([$this->writer, $name], $arguments);
        }
    }
}


class PersonWriter
{

    public function writeNameAndAge($name, $age)
    {
        print $name . '('.$age.')';
    }
}

$wirter = new PersonWriter();
$person = new Person($wirter);

$person->writeNameAndAge('suhua', 26);