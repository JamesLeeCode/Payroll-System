<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $loanAmout = $_POST['loanAmout'];
  $employeeNumber = $_POST['employeeNumber'];

 //Open DB Connection
 $conn = OpenCon();

 $sql = "SELECT * FROM monthlyrecords ";
 $result = $conn->query($sql);
 //Store the results in an array
 $loans = 0;
 while ($row = mysqli_fetch_assoc($result)) {
    $loans= $row['loans'];
 }

  $loans=   $loans + $loanAmout;

  // Enter Designations Into DB
  if(!$conn -> query(
 "UPDATE monthlyrecords SET loans = '$loans' WHERE employeeNumber = '$employeeNumber' "
 ))
 {
   echo("Error description: ". $conn->error);
 }



 //CLose DB Connection
  CloseCon($conn);

header("Location:../dashboard.php");
  exit();
 ?>
