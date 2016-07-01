<?php

require_once('autoload.php');

use Design\Lesson\Lecture;
use Design\Lesson\Seminar;
use Design\Lesson;
use Design\Strategy\FixedCostStrategy;
use Design\Strategy\TimedCostStrategy;

$lecture = new Lecture(4, new FixedCostStrategy());

var_dump($lecture->cost());
var_dump($lecture->chargeType());


$seminar = new Seminar(4, new TimedCostStrategy());
var_dump($seminar->cost());
var_dump($seminar->chargeType());

