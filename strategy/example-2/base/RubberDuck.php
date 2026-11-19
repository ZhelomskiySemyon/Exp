<?php

namespace Strategy\base;

use Strategy\base\Behavior\NoneFly;
use Strategy\base\Behavior\NoneFood;
use Strategy\base\Behavior\NoneSwim;
use Strategy\base\Behavior\NoneWalk;
use Strategy\base\Behavior\RubberSqueak;

class RubberDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(
            new NoneFly(),
            new NoneWalk(),
            new NoneFood(),
            new RubberSqueak(),
            new NoneSwim()
        );
    }
}
