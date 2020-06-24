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
{
    $grades = getStudentSGrades();
    require 'view/studentsgrades.php';
}
