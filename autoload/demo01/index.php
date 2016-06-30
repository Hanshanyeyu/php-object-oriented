<?php

function __autoload($className)
{
    require($className.'.php');
}

new A();

new B();

