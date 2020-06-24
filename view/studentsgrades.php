<?php
/**
 *Created by ICT-151-v2.
 *FILE_NAME:studentsgrades.php
 *USER:marwa
 *DATE:24.06.2020
 */

?>

<select>
    <?php foreach ($grades as $grade){ ?>
    <option value="<?= $grade['idPerson'] ?>"> <?= $grade['personFirstName'] ?> <?= $grade['personLastName'] ?></option>

<?php }?>
</select>
