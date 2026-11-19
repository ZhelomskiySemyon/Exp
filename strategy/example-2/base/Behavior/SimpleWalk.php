<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\WalkBehavior;

class SimpleWalk implements WalkBehavior
{
    public function walk(): void
    {
        echo 'умеет ходить';
    }
}
