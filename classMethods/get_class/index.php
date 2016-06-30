<?php

interface PersonInterface
{

}

abstract class PersonParent
{

}

class PersonChild extends PersonParent implements PersonInterface
{

}

$child = new PersonChild();

var_dump(get_class($child));
//string 'PersonChild'

//获取对象的类名
if(get_class($child) == PersonChild::class) {
    echo 'This is PersonChild Object.'. '<br>';
}

//判断是否为某种类型
if($child instanceof PersonInterface) {
    echo 'This implement the interface of PersonInterface.'. '<br>';
}


