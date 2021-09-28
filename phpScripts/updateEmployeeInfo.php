<?php
include 'db_connection.php';
$conn = OpenCon();

if(isset($_POST["personal"]))
{
  $FCellNo = $_POST['FCellNo'];
  $FAddress = $_POST['FAddress'];
  $id = $_POST['id'];


  if(!$conn -> query(
 "UPDATE employee_info SET FCellNo='$FCellNo', FAddress ='$FAddress'  WHERE employeeNumber = '$id' "
 ))
 {
   echo("Error description: ". $conn->error);
 }
}

if(isset($_POST["employment"]))
{
  $designationCode = $_POST['designationCode'];
  $id = $_POST['id'];


  if(!$conn -> query(
 "UPDATE employee_info SET jobCode ='$designationCode'  WHERE employeeNumber = '$id' "
 ))
 {
   echo("Error description: ". $conn->error);
 }
}

if(isset($_POST["nextofKin"]))
{
  $FNextofKin = $_POST['FNextofKin'];
  $FNextofKin_CellNo	 = $_POST['FNextofKin_CellNo'];
  $FRelationship = $_POST['FRelationship'];

  $id = $_POST['id'];


  if(!$conn -> query(
 "UPDATE employee_info SET FNextofKin_CellNo ='$FNextofKin_CellNo', FNextofKin='$FNextofKin', FRelationship='$FRelationship'  WHERE employeeNumber = '$id' "
 ))
 {
   echo("Error description: ". $conn->error);
 }
}

//CLose DB Connection
CloseCon($conn);
//Session the Employees array

header("Location:../editEmployeeInfo.php");
exit();

?>
