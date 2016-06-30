<?php
interface BaseReflector
{
    public static function export();
}

class MyReflector implements BaseReflector
{

    public static function export($name)
    {
        echo  $name;
    }
}

MyReflector::export('suhua');

//Fatal error: Declaration of MyReflector::export() must be compatible with BaseReflector::export()
