<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\WalkBehavior;

class NoneWalk implements WalkBehavior
{
    public function walk(): void
    {
        echo 'не способен передвигаться';
    }
}
