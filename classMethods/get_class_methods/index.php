<?php
class Dog
{
    public function __construct()
    {

    }

    public function run()
    {

    }

    protected function cry()
    {

    }

    private function crymyself()
    {

    }
}


//查看类或对象的所有方法（不包括定义为 private或protect 的方法）
var_dump(get_class_methods(Dog::class));

//1，判断某个方法是否存在
if(in_array('run', get_class_methods(Dog::class))) {
   echo 'The run method is exists.' . '<br>';
}

$dog = new Dog();

//2. 判断类或对象的某个方法是否可以调用的（则可以看出该方法是否存在）
if(is_callable([Dog::class, 'run'])) {
    echo 'The run method is callable.'. '<br>';
}

if(is_callable([$dog, 'run'])) {
    echo 'The run method is callable.'. '<br>';
}

//3. 判断类或对象方法是否存在
if(method_exists(Dog::class, 'run')) {
    echo 'The run method is exists.' . '<br>';
}
