<?php
/**
 *Created by ICT-151-v2.
 *FILE_NAME:model.php
 *USER:marwa
 *DATE:24.06.2020
 */


/**
 * @return PDO
 */
function getPDO()
{
    require ".const.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

function getStudentSGrades()
{
    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'SELECT person.personFirstName, person.personLastName, evaluation.testDescription,grade.gradeValue, module.moduleShortName FROM app_pfinfo.grade
                    INNER JOIN app_pfinfo.person ON grade.fkStudent = person.idPerson
                    INNER JOIN app_pfinfo.evaluation ON grade.fkEval = evaluation.idEvaluation
                    INNER JOIN app_pfinfo.moduleinstance ON evaluation.fkModuleInstance = idModuleInstance                               
                    INNER JOIN app_pfinfo.module ON moduleinstance.fkModule = idModule
                    WHERE person.role = 0  ORDER BY person.personLastName';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getStudents(){

    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'SELECT DISTINCT * 
                    FROM app_pfinfo.person
                    where person.role = 0 ORDER BY  person.personLastName';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}