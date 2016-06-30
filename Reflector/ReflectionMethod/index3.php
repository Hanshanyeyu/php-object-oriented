<?php
class Dog
{
    public static function getDogs()
    {
        return [];
    }
}

class ReflectionUtil
{
    public static function getMethodSource(\ReflectionMethod $reflector)
    {
        $path = $reflector->getFileName();

        $lines = @file($path);

        $startLine = $reflector->getStartLine();
        $endLine = $reflector->getEndLine();

        $length = $endLine - $startLine + 1;

        return implode('', array_slice($lines, $startLine - 1, $length));
    }
}


$reflector = new ReflectionMethod(Dog::class, 'getDogs');

//获取该方法的源代码，和获取类的代码是一模一样的
$source = ReflectionUtil::getMethodSource($reflector);

print($source);
























