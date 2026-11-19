<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\SwimBehavior;

class NoneSwim implements SwimBehavior
{
    public function swim(): void
    {
        echo 'no swim';
    }
}
