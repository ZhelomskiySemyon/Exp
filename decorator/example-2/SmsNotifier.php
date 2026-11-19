<?php

namespace Example2;

use Example2\Notify;

/**
 * class SmsNotifier
 *
 * @package Example2
 */
class SmsNotifier implements Notify
{
    public function send(): string
    {
        return 'sms';
    }
}