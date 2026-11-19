<?php

namespace Strategy\base;

use Strategy\base\Behavior\GlideFly;
use Strategy\base\Behavior\SimpleFood;
use Strategy\base\Behavior\SimpleQuake;
use Strategy\base\Behavior\SimpleSwim;
use Strategy\base\Behavior\SimpleWalk;

class Male extends Duck
{
    public function __construct(){
        parent::__construct(
            new GlideFly(),
            new SimpleWalk(),
            new SimpleFood(),
            new SimpleQuake(),
            new SimpleSwim()
        );
    }
}
