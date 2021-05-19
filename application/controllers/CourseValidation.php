<?php

interface CourseValidation
{ 
    public function validate($totalCompleted); 
    public function getMessage(); 
}