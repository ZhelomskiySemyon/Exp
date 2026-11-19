<?php

namespace Strategy\good;

class Carting extends Car
{
    public function __construct()
    {
        parent::__construct(new MixOilFillStrategy());
    }
}
