<?php

require_once('CourseValidation.php');


class CCCourseValidation implements CourseValidation {
    private $totalYears = 4;

    public function validate($totalCompleted) {
        $percentage = $totalCompleted/$this->totalYears * 100;
        return $percentage >= 40 && $percentage <= 80;
    }

    public function getMessage() {
        return "Este curso permite que estagiem apenas alunos que concluíram entre 40% e 80% do curso";
    }
}