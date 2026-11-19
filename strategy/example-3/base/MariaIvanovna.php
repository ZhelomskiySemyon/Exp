<?php

namespace school\ex3;

use school\ex3\Interface\Teacher;

class MariaIvanovna implements Teacher
{
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
