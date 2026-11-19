<?php

use decorator\ex\Menu;

$zakaz1 = Menu::createPlombir();
echo $zakaz1->name() . ' .  .  .  ' . $zakaz1->cost() . ' р.' . PHP_EOL;

$zakaz2 = Menu::createWaffleCupPlombir();
echo $zakaz2->name() . ' .  .  .  ' . $zakaz2->cost() . ' р.' . PHP_EOL;
