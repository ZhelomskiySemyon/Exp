<?php

namespace singleton\ex1;

use singleton\ex1\Behavior\BadBehavior;

class Lesson
{
    public function math()
    {
        MariaIvanovna::getInstance()->teach();
        Vova::getInstance()->setSchoolBehavior(new BadBehavior());

        Vova::getInstance()->schoolBehavior();
        Masha::getInstance()->schoolBehavior();
    }
}
