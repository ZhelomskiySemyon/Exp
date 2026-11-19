<?php

namespace Strategy\Clear;

class SubtractStrategy implements Strategy
{
    public function execute(int $a, int $b): int
    {
        return $a - $b;
    }
}
