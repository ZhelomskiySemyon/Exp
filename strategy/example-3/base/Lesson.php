<?php

namespace school\ex3;

use school\ex3\Behavior\BadBehavior;

class Lesson
{
    public function math()
    {
        $teacher = new MariaIvanovna();
        $vova = new Vova();
        $masha = new Masha();

        $teacher->teach();
        $vova->setSchoolBehavior(new BadBehavior());

        $vova->schoolBehavior();
        $masha->schoolBehavior();
    }
}
