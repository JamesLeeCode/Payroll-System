<?php

include 'db_connection.php';
$conn = OpenCon();
$id = $_GET['id'];

if(!$conn -> query(
"DELETE FROM employee_info WHERE employeeNumber = '$id' "
))
{
 echo("Error description: ". $conn->error);
}
CloseCon($conn);


header("Location:../dashboard.php");
exit();
?>
