<?php

require_once('autoload.php');

use Design\Lesson\Lecture;
use Design\Lesson\Seminar;
use Design\Lesson;
use Design\Strategy\FixedCostStrategy;
use Design\Strategy\TimedCostStrategy;

$lecture = new Lecture(4, new FixedCostStrategy());
$seminar = new Seminar(4, new TimedCostStrategy());

$registration = new \Design\RegistrationMsg();

$registration->register($lecture);
$registration->register($seminar);