<?php

namespace Example2;

/**
 * class EmailNotifier
 *
 * @package Example2
 */
class EmailNotifier implements  Notify
{
    public function  send(): string
    {
        return 'Email sent';
    }
}