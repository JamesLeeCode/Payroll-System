<?php

 include 'db_connection.php';



   $firstname = $_POST['firstname'];
   $middlename = $_POST['middlename'];
   $lastname = $_POST['lastname'];
   $FCitizenship = $_POST['FCitizenship'];
   $idpassword = $_POST['idpassword'];
   $FDateofBirth = $_POST['FDateofBirth'];
   $FGender = $_POST['FGender'];
   $FCellNo = $_POST['FCellNo'];
   $FAddress = $_POST['FAddress'];

   $FNextofKin = $_POST['FNextofKin'];
   $FNextofKin_CellNo = $_POST['FNextofKin_CellNo'];
   $FRelationship = $_POST['FRelationship'];

    $designationCode = $_POST['designationCode'];
    $payDate = $_POST['payDate'];
    $FAppointmentDate = $_POST['FAppointmentDate'];
    $employeeNumber = $_POST['employeeNumber'];

    //Open DB Connection
  $conn = OpenCon();

  if(!$conn -> query(
    " INSERT INTO employee_info (firstname, middlename, lastname, FCitizenship, idpassword, FDateofBirth,              FGender,   FCellNo, FAddress,      FNextofKin, FNextofKin_CellNo,      FRelationship, jobCode,            payDate, FAppointmentDate, employeeNumber     )
                        VALUES ('$firstname','$middlename','$lastname','$FCitizenship','$idpassword','$FDateofBirth', '$FGender','$FCellNo','$FAddress', '$FNextofKin','$FNextofKin_CellNo','$FRelationship','$designationCode', '$payDate','$FAppointmentDate','$employeeNumber')"
    ))
    {
      echo("Error description: ". $query->error);
    }
 //CLose DB Connection
 CloseCon($conn);

 header("Location:../dashboard.php");
  exit();
 ?>
