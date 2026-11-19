<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\QuakeBehavior;

class SimpleQuake implements QuakeBehavior
{
    public function Quake(): void
    {
        echo "Quake";
    }
}