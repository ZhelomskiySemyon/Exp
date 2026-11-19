<?php

namespace clear;

class ConcreteDecorator extends Decorator
{
    public function operation(): int
    {
        return $this->component->operation() + 1;
    }
}
