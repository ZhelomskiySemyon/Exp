<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\SwimBehavior;

class SimpleSwim implements SwimBehavior
{
    public function swim(): void
    {
        echo 'swim';
    }
}
