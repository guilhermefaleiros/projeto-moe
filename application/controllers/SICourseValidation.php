<?php

require_once('CourseValidation.php');


class SICourseValidation implements CourseValidation {
    private $totalYears = 4;

    public function validate($totalCompleted) {
        $percentage = $totalCompleted/$this->totalYears * 100;
        return $percentage >= 20 && $percentage <= 80;
    }

    public function getMessage() {
        return "Este curso permite que estagiem apenas alunos que concluíram entre 20% e 80% do curso";
    }
}