<?php

namespace Strategy\good;

class Bolid extends Car
{
    public function __construct()
    {
        parent::__construct(new StandartFillStrategy());
    }
}
