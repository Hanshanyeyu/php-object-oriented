<?php

abstract class Lesson
{
    protected $duration;
    protected $type;

    const TYPE_FIXED = 1;
    const TYPE_TIMED = 2;

    public function __construct($duration, $type = self::TYPE_FIXED)
    {
        $this->type = $type;
        $this->duration = $duration;
    }

    public function cost()
    {
        switch ($this->type) {
            CASE self::TYPE_FIXED:
                return 30;
                break;
            CASE self::TYPE_TIMED:
                return $this->duration * 5;
                break;
            default:
                $this->type = self::TYPE_FIXED;
                return 30;
        }
    }

    public function chargeType()
    {
        switch ($this->type) {
            CASE self::TYPE_FIXED:
                return 'type fixed';
                break;
            CASE self::TYPE_TIMED:
                return 'type timed';
                break;
            default:
                $this->type = self::TYPE_FIXED;
                return 'type fixed';
        }
    }
}

//大学课程，固定收费
class Lecture extends Lesson
{

}

//研讨会，按时收费
class Seminar extends Lesson
{

}

//简单的继承所带来的问题

//计算各种不同类型的课程的收费情况
$lecture = new Lecture(4, Lesson::TYPE_FIXED);
var_dump($lecture->cost());
var_dump($lecture->chargeType());

$seminar = new Seminar(4, Lesson::TYPE_TIMED);
var_dump($seminar->cost());
var_dump($seminar->chargeType());
