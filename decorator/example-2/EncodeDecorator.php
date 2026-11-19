<?php

namespace Example2;

/**
 * class EncodeDecorator
 *
 * @package Example2
 */
class EncodeDecorator extends NotifyDecorator
{
    public function send(): string
    {
        return base64_encode($this->notify->send());
    }
}