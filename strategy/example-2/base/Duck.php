<?php

namespace Strategy\base;

use Strategy\base\Infrastructure\FlyBehavior;
use Strategy\base\Infrastructure\FoodBehavior;
use Strategy\base\Infrastructure\QuakeBehavior;
use Strategy\base\Infrastructure\SwimBehavior;
use Strategy\base\Infrastructure\WalkBehavior;

class Duck
{
    protected FlyBehavior $flyBehavior;

    protected WalkBehavior $walkBehavior;

    protected FoodBehavior $foodBehavior;

    protected QuakeBehavior $quakeBehavior;

    protected SwimBehavior $swimBehavior;

    public function __construct(
        FlyBehavior $flyBehavior,
        WalkBehavior $walkBehavior,
        FoodBehavior $foodBehavior,
        QuakeBehavior $quakeBehavior,
        SwimBehavior $swimBehavior
    ) {
        $this->flyBehavior = $flyBehavior;
        $this->walkBehavior = $walkBehavior;
        $this->foodBehavior = $foodBehavior;
        $this->quakeBehavior = $quakeBehavior;
        $this->swimBehavior = $swimBehavior;
    }

    public function walk(): void
    {
        $this->walkBehavior->walk();
    }

    public function eat(): void
    {
        $this->foodBehavior->eat();
    }

    public function fly(): void
    {
        $this->flyBehavior->fly();
    }

    public function quake(): void
    {
        $this->quakeBehavior->quake();
    }

    public function swim(): void
    {
        $this->swimBehavior->swim();
    }

    /**
     * @param SwimBehavior $swimBehavior
     */
    public function setSwimBehavior(SwimBehavior $swimBehavior): void
    {
        $this->swimBehavior = $swimBehavior;
    }

    public function setQuackBehavior(QuakeBehavior $quackBehavior): void
    {
        $this->quakeBehavior = $quackBehavior;
    }
}
