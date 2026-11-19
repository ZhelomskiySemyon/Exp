<?php

namespace Strategy\good;

class MixOilFillStrategy implements FillStrategy
{
    public function fill(): void
    {
        echo 'Заправляем смесью бензина и масла';
    }
}
