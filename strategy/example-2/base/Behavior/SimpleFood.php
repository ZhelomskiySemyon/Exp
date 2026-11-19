<?php

namespace Strategy\base\Behavior;

use Strategy\base\Infrastructure\FoodBehavior;

class SimpleFood implements FoodBehavior
{
    public function eat(): void
    {
        echo 'умеет кушать';
    }
}
