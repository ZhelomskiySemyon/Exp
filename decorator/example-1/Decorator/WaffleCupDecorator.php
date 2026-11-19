<?php

namespace decorator\ex;

class WaffleCupDecorator extends IceCreamDecorator
{
    public function __construct(IceCreamInterface $iceCream)
    {
        parent::__construct($iceCream);
    }

    public function name(): string
    {
        return $this->iceCream->name() . " в вафельном стаканчике";
    }

    public function cost(): int
    {
        return $this->iceCream->cost() + 30;
    }
}
