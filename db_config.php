<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "school_sys";

$db_link = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($db_link->connect_error) {
  die("Connection failed: " . $db_link->connect_error);
}
?>
