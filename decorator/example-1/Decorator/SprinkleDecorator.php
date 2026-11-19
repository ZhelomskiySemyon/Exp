<?php

namespace decorator\ex;

class SprinkleDecorator extends IceCreamDecorator
{
    private $sprinkleType;

    public function __construct(IceCreamInterface $iceCream, string $sprinkleType)
    {
        parent::__construct($iceCream);
        $this->sprinkleType = $sprinkleType;
    }

    public function name(): string
    {
        return $this->iceCream->name() . " с посыпкой {$this->sprinkleType}";
    }

    public function cost(): int
    {
        return $this->iceCream->cost() + 5;
    }
}
