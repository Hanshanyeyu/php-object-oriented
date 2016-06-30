<?php
namespace My;

class Person
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class ReflectionUtil
{
    public static function getClassSource(\ReflectionClass $reflector)
    {
        //D:\www7\php-object-oriented\Reflector\ReflectionClass\index3.php
        $path = $reflector->getFileName();

        $lines = @file($path);

        $startLine = $reflector->getStartLine();
        $endLine = $reflector->getEndLine();

        $length = $endLine - $startLine + 1;

        return implode("", array_slice($lines, $startLine - 1, $length));
    }
}

$reflector = new \ReflectionClass(Person::class);

$source = ReflectionUtil::getClassSource($reflector);

//把类的源代码读取出来
print ($source);


















