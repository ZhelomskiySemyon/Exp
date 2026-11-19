<?php

namespace Strategy\bad;

class Carting extends Car
{
    public function fill()
    {
        echo 'Заправляемся бензином + маслом';
    }
}
