<?php

namespace Strategy\bad;

class ChildrenCar extends Car
{
    public function fill(): void
    {
        echo 'Не нужно заправлять игрушки!!';
    }
}
