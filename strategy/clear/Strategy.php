<?php

namespace Strategy\Clear;

interface Strategy
{
    public function execute(int $a, int $b): int;
}
