<?php

namespace decorator\ex;

class BasicIceCream implements IceCreamInterface
{
    private $flavor;

    public function __construct(string $flavor = 'Белое')
    {
        $this->flavor = $flavor;
    }

    public function name(): string
    {
        return "Шарик {$this->flavor} мороженного";
    }

    public function cost(): int
    {
        return 100;
    }
}
