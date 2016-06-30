# 类函数和对象函数

## class_exists/get_declared_classes

1. class_exists 根据类名判断该类是否存在
2. get_declared_classes 获取当前脚本所有定义过的类

## get_class/instanceof

1. get_class 获取对象的类名
1. instanceof 判断是否为某种数据类型

## get_class_methods/is_callable/method_exists

1. get_class_methods 获取类或对象的所有方法（不包括 private 或 protect 访问权限的方法）
2. is_callable 判断类或对象方法是否可以调用的
3. method_exists 判断类或对象的方法是否存在

## get_class_vars

1. get_class_vars 获取类的所有属性

## get_parent_class/is_subclass_of/class_implements

1. get_parent_class 获取一个对象的父类
2. is_subclass_of 判断一个对象是否为某个类的子类
3. class_implements 获取该类所实现的所有接口

## call_user_func/call_user_func_array

1. call_user_func 调用一个函数或者对象的方法
2. call_user_func_array 调用一个函数或者对象的方法，它的参数都是以数组形式，并且以扁平化的形式传递给函数或方法