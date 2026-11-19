<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\FoodBehavior;

class NoneFood implements FoodBehavior
{
    public function eat(): void
    {
        echo 'не способен есть';
    }
}
