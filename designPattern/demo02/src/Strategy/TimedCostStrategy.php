<?php
namespace Design\Strategy;

use Design\CostStrategy;
use Design\Lesson;

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