<?php

namespace Example2;

/**
 * class HashDecorator
 *
 * @package Example2
 */
class HashDecorator extends NotifyDecorator
{
    public function send(): string
    {
        return md5($this->notify->send()); // todo поменять когда нибудь
    }
}