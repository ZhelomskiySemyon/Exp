<?php

namespace Strategy\base;

use Strategy\base\Behavior\SimpleFly;
use Strategy\base\Behavior\SimpleFood;
use Strategy\base\Behavior\SimpleQuake;
use Strategy\base\Behavior\SimpleSwim;
use Strategy\base\Behavior\SimpleWalk;

class Female extends Duck
{
    public function __construct(){
        parent::__construct(
            new SimpleFly(),
            new SimpleWalk(),
            new SimpleFood(),
            new SimpleQuake(),
            new SimpleSwim()
        );
    }
}
