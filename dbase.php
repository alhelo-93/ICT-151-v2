<?php
/**
 *Created by ICT-151-v2.
 *FILE_NAME:dbase.php
 *USER:marwa
 *DATE:24.06.2020
 */

/**
 *
 *
 */

function getPDO()
{
    require ".const.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}