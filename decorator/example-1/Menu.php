<?php

namespace decorator\ex;

class Menu
{
    public static function createPlombir(): IceCreamInterface
    {
        return new BasicIceCream('Белое');
    }

    public static function createWaffleCupPlombir(): IceCreamInterface
    {
        $iceCream = new BasicIceCream('Белое');
        $iceCream = new WaffleCupDecorator($iceCream);

        return $iceCream;
    }

    public static function createTasteBomb(): IceCreamInterface
    {
        $iceCream = new BasicIceCream('Белое');
        $iceCream = new ToppingDecorator($iceCream, 'вишневый');
        $iceCream = new SprinkleDecorator($iceCream, 'звездочки');

        return $iceCream;
    }

    public static function createSky(): IceCreamInterface
    {
        $iceCream = new BasicIceCream('Голубое');
        $iceCream = new SprinkleDecorator($iceCream, 'облачка');
        $iceCream = new SprinkleDecorator($iceCream, 'звездочки');
        $iceCream = new SprinkleDecorator($iceCream, 'радуга');

        return $iceCream;
    }
}
