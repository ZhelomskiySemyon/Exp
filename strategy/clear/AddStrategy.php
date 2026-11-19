<?php

namespace Strategy\Clear;

class AddStrategy implements Strategy
{
    public function execute(int $a, int $b): int
    {
        return $a + $b;
    }
}
