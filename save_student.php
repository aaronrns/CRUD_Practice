<?php
require 'db_config.php';

if (!empty($_POST['uid'])) {
    $update_query = "UPDATE student_registry SET 
        given_name = '".$_POST['given_name']."',
        middle_name = '".$_POST['middle_name']."',
        surname = '".$_POST['surname']."'
        WHERE student_id = '".$_POST['uid']."'";

    $db_link->query($update_query);
} else {
    $insert_query = "INSERT INTO student_registry (given_name, middle_name, surname)
        VALUES (
        '".$_POST['given_name']."',
        '".$_POST['middle_name']."',
        '".$_POST['surname']."'
        )";

    $db_link->query($insert_query);
}

$db_link->close();
header("Location: student_list.php");
exit();
?>
