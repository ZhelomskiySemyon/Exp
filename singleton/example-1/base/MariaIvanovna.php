<?php

namespace singleton\ex1;

use singleton\ex1\Interface\Teacher;

class MariaIvanovna implements Teacher
{
    private static ?MariaIvanovna $instance = null;

    public static function getInstance(): MariaIvanovna
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    private function __construct()
    {
        // Закрытый для прямого создания
    }

    private  function __wakeup()
    {
        // Закрытый для десериализации
    }

    private  function __clone()
    {
        // Закрыт для клонирования
    }

    public function teach(): void
    {
        echo 'Bla-Bla-Bla . . .';
    }

    public function answer(string $question): string
    {
        return $question . PHP_EOL
            . '- Answer!!!';
    }
}
