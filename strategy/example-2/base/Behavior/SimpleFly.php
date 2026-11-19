<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\FlyBehavior;

class SimpleFly implements FlyBehavior
{
    public function fly(): void
    {
        echo "Утка летит";
    }
}
