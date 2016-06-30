<?php

$name = 'Task';

require('tasks/' . $name. '.php');

$class = 'tasks\\'.$name;

$task = new $class;