<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\QuakeBehavior;

class RubberSqueak implements QuakeBehavior
{
    public function Quake(): void
    {
        echo "Squeak";
    }
}