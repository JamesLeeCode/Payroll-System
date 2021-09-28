<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $bonusAmout = $_POST['bonusAmout'];
  $employeeNumber = $_POST['employeeNumber'];

 //Open DB Connection
 $conn = OpenCon();

 if(  $employeeNumber == "all")
 {
   if(!$conn -> query(
  "UPDATE monthlyrecords SET bonus = '$bonusAmout' "
  ))
  {
    echo("Error description: ". $conn->error);
  }

 }
 else {
  // Enter Designations Into DB
  $sql = "SELECT * FROM monthlyrecords WHERE employeeNumber='$employeeNumber' ";
  $result = $conn->query($sql);
  //Store the results in an array
  $bonus = 0;
  while ($row = mysqli_fetch_assoc($result)) {
     $bonus= $row['bonus'];
  }

   $bonus=   $bonus + $bonusAmout;
  if(!$conn -> query(
 "UPDATE monthlyrecords SET bonus = '$bonus' WHERE employeeNumber = '$employeeNumber' "
 ))
 {
   echo("Error description: ". $conn->error);
 }
}


 //CLose DB Connection
 CloseCon($conn);

 header("Location:../dashboard.php");
 exit();
 ?>
