<?php
class Person
{
    public $name;
    public $age;

    public function __construct($name, &$age = 20, Food $food)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Food
{

}

$reflectorMethod = new ReflectionMethod(Person::class, '__construct');

$reflectorParameters = $reflectorMethod->getParameters();

foreach ($reflectorParameters as $parameter) {

    //ReflectionClass 返回该参数所在的类反射实例
    var_dump($parameter->getDeclaringClass());

    var_dump($parameter->getName()); //name

    //返回该参数的类名，只有当该参数是对象类型才会有值
    var_dump($parameter->getClass()); // ReflectionClass Foo

    //获取参数位置 1,2,3
    var_dump($parameter->getPosition());

    //是否以引用传递，当参数前面有一个 & 符号时才是引用传递
    var_dump($parameter->isPassedByReference());

    //参数是否有设置默认值，如果有才能够使用 getDefaultValue 获取默认值
    if($parameter->isDefaultValueAvailable()) {
        var_dump($parameter->getDefaultValue());
    }
}

