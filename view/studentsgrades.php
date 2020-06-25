<?php
/**
 *Created by ICT-151-v2.
 *FILE_NAME:studentsstudents.php
 *USER:marwa
 *DATE:24.06.2020
 */

?>

<form action="?action=addgrade" method="post">
<input type="text" list="listStudents" name="nameStudent">
<datalist id="listStudents">
    <?php foreach ($students as $student){ ?>
    <option value="<?= $student['idPerson'] ?> <?= $student['personLastName'] ?>"> <?= $student['personFirstName'] ?> <?= $student['personLastName'] ?></option>

<?php }?>
</datalist>


<input type="text" list="listEvaluations" name="nameEval">
<datalist id="listEvaluations">
    <?php foreach ($evaluations as $evaluation){ ?>
        <option value="<?=$evaluation['idEvaluation'] ?>"><?=$evaluation['testDescription'] ?></option>

    <?php }?>
</datalist>
<input type="text" name="nameGrade">
<input type="submit">
</form>