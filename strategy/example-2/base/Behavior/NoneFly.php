<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\FlyBehavior;

class NoneFly implements FlyBehavior
{
    public function fly(): void
    {
        echo 'не способен летать';
    }
}
