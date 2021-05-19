<?php

require_once('CourseValidation.php');


class GenericCourseValidation implements CourseValidation {
    public function validate($totalCompleted) {
        return true;
    }

    public function getMessage() {
        return "Este curso permite que estagiem apenas alunos que concluíram entre 20% e 80% do curso";
    }
}