<?php

namespace Example2;

/**
 * class ZipDecorator
 *
 * @package Example2
 */
class ZipDecorator extends NotifyDecorator
{
    public function send(): string
    {
        return (string) gzencode($this->notify->send(), 9);
    }
}