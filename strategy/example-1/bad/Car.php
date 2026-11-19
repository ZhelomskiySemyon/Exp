<?php

namespace Strategy\bad;

class Car
{
    public function gas(): void
    {
        echo 'Ехай';
    }

    public function stop(): void
    {
        echo 'Тормози';
    }

    public function fill()
    {
        echo 'Заправляемся бензином';
    }
}
