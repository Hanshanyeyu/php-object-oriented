<?php
interface PersonInterface
{

}

abstract class PersonParentBase
{

}

abstract class PersonParent extends PersonParentBase
{

}

class PersonChild extends PersonParent implements PersonInterface
{

}


$child = new PersonChild();

//获取对象的父类
var_dump(get_parent_class($child));
//PersonParent

if(is_subclass_of($child, PersonParent::class)) {
    echo 'PersonChild is subclass of PersonParent.' . '<br>';
}

//同样是
if(is_subclass_of($child, PersonParentBase::class)) {
    echo 'PersonChild is subclass of PersonParent.' . '<br>';
}

//is_subclass_of 只能判断是否该对象是否是某类的子类，而不能判断它是否实现类某些接口

//不会输出
if(in_array('someInterface', class_implements($child))) {
    echo 'The someInterface is implement.' . '<br>';
}






















