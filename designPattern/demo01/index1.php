<?php

abstract class Lesson
{
    private $strategy;
    private $duration;

    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->strategy = $strategy;
    }

    public function cost()
    {
        return $this->strategy->cost($this);
    }

    public function chargeType()
    {
        return $this->strategy->chargeType();
    }

    public function getDuration()
    {
        return $this->duration;
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

abstract class CostStrategy
{
    public abstract function cost(Lesson $lesson);

    public abstract function chargeType();
}

class FixedCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson)
    {
        return 30;
    }

    public function chargeType()
    {
        return 'type fixed';
    }
}

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return $lesson->getDuration() * 5;
    }

    public function chargeType()
    {
        return 'type timed';
    }
}

//这里实现了策略模式。
//这样子使类的职责更加明确。CostStrategy 主要负责计算费用，而 Lesson 负责管理课程的基本信息

//组合使用对象比继承体系更加灵活。结论：组合优于继承

$lecture = new Lecture(4, new FixedCostStrategy());
var_dump($lecture->cost());
var_dump($lecture->chargeType());

$seminar = new Seminar(4, new TimedCostStrategy());
var_dump($seminar->cost());
var_dump($seminar->chargeType());

