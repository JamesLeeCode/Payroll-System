<?php
include 'phpScripts/db_connection.php';
$conn = OpenCon();
$groudGettingPaid = 0;
$today = date("d");
if($today <= 15)
{
  $groudGettingPaid= 15;
}
else {
  $groudGettingPaid= 25;
}


$sql ="SELECT employee_info.jobCode, employee_info.firstname, employee_info.lastname, employee_info.employeeNumber,employee_info.payDate, monthlyrecords.loans, monthlyrecords.bonus,
 monthlyrecords.overTime, monthlyrecords.saturdaysOverTime, monthlyrecords.holidayOverTime ,designations.jobTitle ,designations.basicSalary,
designations.normalOvertime, designations.saturdayOvertime AS saturdayOvertime1 , designations.holidayOvertime AS holidayOvertime1
 FROM employee_info INNER JOIN monthlyrecords ON  employee_info.employeeNumber = monthlyrecords.employeeNumber
 INNER JOIN designations ON  designations.jobCode = employee_info.jobCode
 WHERE monthlyrecords.processed = 'false'
 AND employee_info.payDate = '$groudGettingPaid'";

 $result1 = $conn->query($sql);
 $count = 0;
 //Store the results in an array

 while ($row = mysqli_fetch_assoc($result1)) {
   $count =  $count+1;
}

if ($count >=1 ) {
      header("Location:payRoll.php?status=error");
       exit();
} else {

  if(!$conn -> query(
 "UPDATE monthlyrecords SET loans='0', bonus ='0', overTime= '0', holidayOvertime= '0', saturdaysOverTime	= '0', processed= 'false' WHERE processed = 'true' "
 ))
 {
   echo("Error description: ".$jobCode);
 }

      header("Location:Payslips.php");
      exit();
}

 ?>
