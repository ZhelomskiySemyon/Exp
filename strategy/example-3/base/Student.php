<?php

namespace school\ex3;

use school\ex3\Behavior\GoodBehavior;
use school\ex3\Interface\SchoolBehavior;

class Student
{
    protected SchoolBehavior $schoolBehavior;

    public function __construct()
    {
        $this->schoolBehavior = new GoodBehavior();
    }

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
