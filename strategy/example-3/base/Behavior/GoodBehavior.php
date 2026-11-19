<?php

namespace school\ex3\Behavior;

use school\ex3\Interface\SchoolBehavior;

class GoodBehavior implements SchoolBehavior
{
    public function behavior(): void
    {
        echo 'good';
    }
}
