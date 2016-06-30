<?php

$name = 'Task';

$path = 'tasks/' . $name. '.php';

if(file_exists($path)) {

    require($path);
}

$class = 'tasks\\'.$name;

//判断该类是否存在
if(class_exists($class)) {

    $task = new $class;
}

//获取当前脚本所有定义过的类
var_dump(get_declared_classes());



