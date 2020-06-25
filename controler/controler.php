<?php
/**
 *Created by ICT-151-v2.
 *FILE_NAME:controler.php
 *USER:marwa
 *DATE:24.06.2020
 */
require 'model/model.php';

function getHome()
{
    $variable = getPDO();
    require 'view/home.php';
}

function getGradesPage()
{   $students = getStudents();
    $grades = getStudentSGrades();
    $modules = getModules();
    $evaluations = getEvaluations();
    require 'view/studentsgrades.php';
}
function callGrade($gradeValue, $idStudent, $idEval){
    createNewGrade( [
        "grade" => $gradeValue,
        "student" => $idStudent,
        "eval" => $idEval
    ]);
}
