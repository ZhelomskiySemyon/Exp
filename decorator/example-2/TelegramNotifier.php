<?php

namespace Example2;

use Example2\Notify;

/**
 * class TelegramNotifier
 *
 * @package Example2
 */
class TelegramNotifier implements Notify
{
    public function send(): string
    {
        return 'Telegram';
    }
}