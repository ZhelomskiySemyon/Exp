<?php

namespace Strategy\good;

class Car
{
    private FillStrategy $fillStrategy;

    public function __construct(FillStrategy $fillStrategy)
    {
        $this->fillStrategy = $fillStrategy;
    }

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
        $this->fillStrategy->fill();
    }
}
