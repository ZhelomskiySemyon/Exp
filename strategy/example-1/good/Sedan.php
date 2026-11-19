<?php

namespace Strategy\good;

class Sedan extends Car
{
    public function __construct()
    {
        parent::__construct(new StandartFillStrategy());
    }
}
