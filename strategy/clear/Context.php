<?php

namespace Strategy\Clear;

class Context
{
    private Strategy $strategy;

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $a, int $b): int
    {
        return $this->strategy->execute($a, $b);
    }
}
