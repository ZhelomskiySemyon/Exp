<?php

namespace decorator\ex;

class ToppingDecorator extends IceCreamDecorator
{
    private $toppingType;

    public function __construct(IceCreamInterface $iceCream, string $toppingType)
    {
        parent::__construct($iceCream);
        $this->toppingType = $toppingType;
    }

    public function name(): string
    {
        return $this->iceCream->name() . " с {$this->toppingType} топингом";
    }

    public function cost(): int
    {
        return $this->iceCream->cost() + 15;
    }
}
