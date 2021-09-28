<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $jobCode = $_POST['j4'];
  //$jobTitle = $_POST['jobTitle'];
  $basicSalary = $_POST['basicSalary'];
  $normalOvertime = $_POST['normalOvertime'];
  $saturdayOvertime = $_POST['saturdayOvertime'];
  $holidayOvertime = $_POST['holidayOvertime'];

 //Open DB Connection
 $conn = OpenCon();
  // Update Designations DB using the jobCode

   if(!$conn -> query(
  "UPDATE designations SET basicSalary='$basicSalary', normalOvertime ='$normalOvertime', saturdayOvertime= '$saturdayOvertime', holidayOvertime= '$holidayOvertime' WHERE jobCode = '$jobCode' "
  ))
  {
    echo("Error description: ".$jobCode);
  }

 //CLose DB Connection
 CloseCon($conn);

 header("Location:../designation.php");
 exit();
 ?>
