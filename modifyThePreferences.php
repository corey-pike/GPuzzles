<?php

include_once 'db_configuration.php';

if (isset($_POST['new_rows'])){

    $rows = mysqli_real_escape_string($db, $_POST['new_rows']);
    $puzzles = mysqli_real_escape_string($db, $_POST['new_puzzles']);
      
    $sql1 = "UPDATE `preferences` SET `value`= $rows WHERE `name` = 'NO_OF_PUZZLES_PER_ROW'";
    $sql2 = "UPDATE `preferences` SET `value`= $puzzles WHERE `name` = 'NO_OF_PUZZLES_TO_SHOW'";

    mysqli_query($db, $sql1);
    mysqli_query($db, $sql2);
    header('location: index.php?preferencesUpdated=Success');
}//end if
?>
