<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\FlyBehavior;

class GlideFly implements FlyBehavior
{
    public function fly(): void
    {
        echo "Утка парит";
    }
}
