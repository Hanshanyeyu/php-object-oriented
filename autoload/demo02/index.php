<?php

use Aisuhua\Models\User;

//为什么preg_match 需要双反斜线
//http://php.net/manual/zh/regexp.reference.escape.php

function __autoload($className) {

    if(preg_match("/\\\\/", $className)) {
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    } else {
        $path = str_replace('_', DIRECTORY_SEPARATOR, $className);
    }

    if(file_exists($path . '.php')) {
        require($path . '.php');
    }
}


new Aisuhua\Controllers\UserController();
new User();