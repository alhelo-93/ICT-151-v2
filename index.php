<?php
/**
 *Created by ICT-151-v2.
 *FILE_NAME:index.php
 *USER:marwa
 *DATE:24.06.2020
 *
 */

require 'controler/controler.php';

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


switch ($action) {
    case 'grades':
        getGradesPage();
        break;
    case 'addgrade':


        $idStudent = $_POST['nameStudent'];
        $idEval = $_POST['nameEval'];
        $gradeValue = $_POST['nameGrade'];
        callGrade($gradeValue,$idStudent,$idEval);
        break;
    default:
        getHome();


}