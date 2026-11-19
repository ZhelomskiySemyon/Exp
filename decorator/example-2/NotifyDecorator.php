<?php

namespace Example2;

/**
 * class NotifyDecorator
 *
 * @package Example2
 */
abstract class NotifyDecorator implements  Notify
{
    public function __construct(protected Notify $notify)
    {
    }
}