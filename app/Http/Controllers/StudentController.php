<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $code='160613001';
    private $name='Ana';
    private $course;
    private $task;
    private $quiz;
    private $mid_term;
    private $final;
    private $grade;

    public function myCourse ($course,$task,$quiz,$mid_terms,$final){
        $code = $this->code;
        $name = $this->name;
        $course = $this->course;
        $task = $this->code;
        $quiz = $this->code;
        $mid_term = $this->code;
        $final = $this->code;
        $grade = $this->code;
    }
    prive function grade(){
        $course = $this -> course;
        $task = $this -> task;
        $quiz = $this -> quiz;
        $mid_terms = $this -> mid_terms;
        $final = $this -> final;

    }
}
