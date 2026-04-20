<?php
require 'db_config.php';

if(isset($_REQUEST['remove'])){
    $del_query = "DELETE FROM student_registry WHERE student_id=" . intval($_REQUEST['remove']);
    $db_link->query($del_query);
}

$list_query = "SELECT * FROM student_registry ORDER BY student_id ASC";
$records = $db_link->query($list_query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Directory</title>
</head>
<body>
    <h2>Registered Students</h2>
    <a href='student_form.php'><button>Add New Student</button></a><br><br>
    
    <?php if ($records->num_rows > 0): ?>
        <table cellpadding='8' cellspacing='0' border='1'>
            <tr style="background-color: #f2f2f2;">
                <th>ID No.</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>System Actions</th>
            </tr>
            <?php while($item = $records->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $item["student_id"]; ?></td>
                    <td><?php echo $item["given_name"]; ?></td>
                    <td><?php echo $item["middle_name"]; ?></td>
                    <td><?php echo $item["surname"]; ?></td>
                    <td>
                        <a href='student_list.php?remove=<?php echo $item["student_id"]; ?>' 
                           onclick="return confirm('Are you sure you want to delete this student record?');">Delete</a>
                        |
                        <a target='_blank' href='student_form.php?uid=<?php echo $item["student_id"]; ?>'>Edit</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No student records found in the database.</p>
    <?php endif; ?>

    <?php $db_link->close(); ?>
</body>
</html>
