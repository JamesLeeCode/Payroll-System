<?php
 include 'db_connection.php';

  //Getting Data from the form


 //Open DB Connection
 $conn = OpenCon();
  // Update Designations DB using the jobCode

  $deductions = $_POST['deductions'];
  $earning = $_POST['earning'];
  //print_r($_POST);
  //die;
  $employeeNumber = $_POST['emp'];
  $name = $_POST['name'];
  $overTime = $_POST['overTime'];
  $loans = $_POST['loans'];

  $jobCode = $_POST['jobCode'];
  $jobTitle = $_POST['jobTitle'];
  $bonus = $_POST['bonus'];
  $basicSalary = $_POST['basicSalary'];
  $payDate = $_POST['payDate'];
  $totalWage = $basicSalary + $bonus + $earning + $overTime - $loans - $deductions ;
  $dateProcessed =  date("Y/m/d");


  // Enter Designations Into DB
 if(!$conn -> query(
   " INSERT INTO salaries (employeeNumber	, fullName, basicSalary, payDate, jobCode, jobTitle, overtime, bonus, loan, otherDeductions,otherearning, totalWage, dateProcessed )
   VALUES ('$employeeNumber','$name','$basicSalary','$payDate','$jobCode','$jobTitle', '$overTime', '$bonus', '$loans','$deductions', '$earning', '$totalWage', '$dateProcessed'  )"
   ))
   {
     echo("Error description: ". $mysqli->error);
   }

 //CLose DB Connection
 CloseCon($conn);

 ?>
