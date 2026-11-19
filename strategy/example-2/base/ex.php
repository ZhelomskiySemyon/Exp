<?php

use Strategy\base\Behavior\NoneSwim;
use Strategy\base\Behavior\RubberSqueak;
use Strategy\base\Male;
use Strategy\base\RubberDuck;

$male = new Male();
$rubberDuck = new RubberDuck();
/* охотник сделал выстрел в резиновую утку*/
$rubberDuck->setQuackBehavior(new RubberSqueak());
$rubberDuck->setSwimBehavior(new NoneSwim());