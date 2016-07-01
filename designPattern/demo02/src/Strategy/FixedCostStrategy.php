<?php
namespace Design\Strategy;

use Design\CostStrategy;
use Design\Lesson;

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