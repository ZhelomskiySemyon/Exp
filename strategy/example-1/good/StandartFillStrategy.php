<?php

namespace Strategy\good;

class StandartFillStrategy implements FillStrategy
{
    public function fill(): void
    {
        echo 'Заправляем бензин';
    }
}
