<?php
namespace My;

class Dog
{

}

$reflector = new \ReflectionClass(Dog::class);
$reflector2 = new \ReflectionClass('stdClass');


var_dump($reflector->getName()); //My\Dog 获取类名

var_dump($reflector->inNamespace()); //true 是否在命名空间内

var_dump($reflector->getNamespaceName()); //My 获取所在的命名空间

var_dump($reflector->isUserDefined()); //true 是否用户自定义类（非内置类）
var_dump($reflector2->isUserDefined()); //false

var_dump($reflector->isInternal()); //false 是否为内置类
var_dump($reflector2->isInternal()); //false

var_dump($reflector->isInterface()); // false 是否为内置类
var_dump($reflector->isAbstract()); //false 是否为抽象类
var_dump($reflector->isFinal()); //false 是否为 Final 类
var_dump($reflector->isInstantiable()); //false 是否可以实例化




















