<?php

namespace singleton\ex1\Behavior;

use singleton\ex1\Interface\SchoolBehavior;

class GoodBehavior implements SchoolBehavior
{
    public function behavior(): void
    {
        echo 'good';
    }
}
