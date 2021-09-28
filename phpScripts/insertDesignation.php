<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $jobCode = $_POST['jobCode'];
  $jobTitle = $_POST['jobTitle'];
  $basicSalary = $_POST['basicSalary'];
  $normalOvertime = $_POST['normalOvertime'];
  $saturdayOvertime = $_POST['saturdayOvertime'];
  $holidayOvertime = $_POST['holidayOvertime'];

 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
 if(!$conn -> query(
   " INSERT INTO designations (jobCode, jobTitle, basicSalary, normalOvertime, saturdayOvertime, holidayOvertime)
   VALUES ('$jobCode','$jobTitle','$basicSalary','$normalOvertime','$saturdayOvertime','$holidayOvertime')"
   ))
   {
     echo("Error description: ". $mysqli->error);
   }

 //CLose DB Connection
 CloseCon($conn);

 header("Location:../designation.php");
  exit();
 ?>
