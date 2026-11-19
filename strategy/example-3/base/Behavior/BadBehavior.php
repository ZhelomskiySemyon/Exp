<?php

namespace school\ex3\Behavior;

use school\ex3\Interface\SchoolBehavior;

class BadBehavior implements SchoolBehavior
{
    public function behavior(): void
    {
        echo 'bad';
    }
}
