<?php

namespace clear;

abstract class Decorator extends Component
{
    protected Component $component;

    public function operation(): int
    {
        return $this->component->operation();
    }
}
