<?php

namespace singleton\ex1;

use singleton\ex1\Behavior\GoodBehavior;
use singleton\ex1\Interface\SchoolBehavior;

class Student
{
    private static array $instances = [];

    protected SchoolBehavior $schoolBehavior;

    public static function getInstance() {
        if (!isset(self::$instances[static::class])) {
            self::$instances[static::class] = new static();
        }

        return self::$instances[static::class];
    }

    private function __construct()
    {
        $this->schoolBehavior = new GoodBehavior();
    }

    private function __clone() {}

    private function __wakeup() {}


    public function question(): string
    {
        return 'Question?';
    }

    public function setSchoolBehavior(SchoolBehavior $schoolBehavior): void
    {
        $this->schoolBehavior = $schoolBehavior;
    }

    public function schoolBehavior(): void
    {
        $this->schoolBehavior->behavior();
    }
}
