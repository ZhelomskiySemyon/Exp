<?php

namespace Strategy\good;

class NullFillStrategy implements FillStrategy
{
    public function fill(): void
    {
        echo 'Не заправляем';
    }
}
