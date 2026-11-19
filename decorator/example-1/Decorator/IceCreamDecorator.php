<?php

namespace decorator\ex;

abstract class IceCreamDecorator implements IceCreamInterface
{
    protected IceCreamInterface $iceCream;

    public function __construct(IceCreamInterface $iceCream)
    {
        $this->iceCream = $iceCream;
    }

    public function name(): string
    {
        return $this->iceCream->name();
    }

    public function cost(): int
    {
        return $this->iceCream->cost();
    }
}
