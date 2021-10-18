<?php

 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();

  $user = mysqli_real_escape_string( $conn, $_POST['user']);
  $password = mysqli_real_escape_string( $conn, $_POST['password']);


 $query = "SELECT * FROM users WHERE username	= '".$user ."' AND password = '".$password."'  ";
 $result = mysqli_query( $conn,  $query);

if(mysqli_num_rows( $result)==1)
{
  header("Location:../dashboard.php");
  exit();
}
else {
  header("Location:../index.php?status=error");
  exit();
}


 //CLose DB Connection
  CloseCon($conn);


 ?>
