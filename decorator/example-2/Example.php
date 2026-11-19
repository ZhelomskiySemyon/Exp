<?php

namespace Example2;

/**
 * class Example
 *
 * @package Example2
 */
class Example
{
    public function __construct(readonly private string $data)
    {

    }

    public function sendToTelegramEncodedMessage(): string
    {
        $telegram = new TelegramNotifier();
        $zipDecorator = new ZipDecorator($telegram);
        $encodeDecorator = new EncodeDecorator($zipDecorator);

        return $encodeDecorator->send();
    }

    public function sendToEmailHashedMessage(): null
    {
        $email = new EmailNotifier();
        $hashDecorator = new HashDecorator($email);

        return $hashDecorator->send();
    }
}