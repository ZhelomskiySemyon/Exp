<?php

namespace Strategy\good;

class ChildrenCar extends Car
{
    public function __construct()
    {
        parent::__construct(new NullFillStrategy());
    }
}
