<?php

$config = Configure::getInstance('config.json');

$config->addParam('name', 'suhua');
$config->addParam('age', 26);

$config->write();

$config = Configure::getInstance('config.xml');
$config->read();