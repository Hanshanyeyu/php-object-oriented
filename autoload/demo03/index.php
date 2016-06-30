<?php

spl_autoload_register(function($class) {

    if(preg_match('/\\\\/', $class)) {
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    }

    if (file_exists($path. '.php')) {
        require($path . '.php');
    }

});

new Aisuhua\Models\User();