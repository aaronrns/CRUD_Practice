<?php
require 'db_config.php';

$record_id = "";
$f_name = "";
$m_name = "";
$l_name = "";

if (isset($_REQUEST['uid'])) {
	$query = "SELECT * FROM student_registry WHERE student_id =" . intval($_REQUEST['uid']);
    $db_result = $db_link->query($query);

    if ($db_result->num_rows > 0) {
        while($row = $db_result->fetch_assoc()) {
            $record_id = $row["student_id"];
            $f_name = $row["given_name"];
            $m_name = $row["middle_name"];
            $l_name = $row["surname"];
        }
    }
    $db_link->close();
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Student Information Form</h2>

<form action="save_student.php" method="post">
    <input type="hidden" name="uid" value="<?php echo $record_id; ?>">
    
    <label>Student ID:</label> 
    <input type="text" name="student_id" value="<?php echo $record_id; ?>" readonly><br><br>
    
    <label>First Name:</label> 
    <input type="text" name="given_name" value="<?php echo $f_name; ?>"><br><br>
    
    <label>Middle Name:</label> 
    <input type="text" name="middle_name" value="<?php echo $m_name; ?>"><br><br>
    
    <label>Last Name:</label> 
    <input type="text" name="surname" value="<?php echo $l_name; ?>"><br><br>
    
    <input type="submit" value="Save Student Data">
</form>

</body>
</html>
