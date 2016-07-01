<?php
namespace Design;

abstract class CostStrategy
{
    public abstract function cost(Lesson $lesson);

    public abstract function chargeType();
}
