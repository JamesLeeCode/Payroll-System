<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $type = $_POST['type'];
  $employeeNumber = $_POST['employeeNumber'];
  $overTime1 = $_POST['overTime'];

 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB


      if (  $type == "1") {
        $sql = "SELECT * FROM monthlyrecords ";
        $result = $conn->query($sql);
        //Store the results in an array
        $overTime = 0;
        while ($row = mysqli_fetch_assoc($result)) {
           $overTime= $row['overTime'];
        }

         $overTime=   $overTime + $overTime1;

        if(!$conn -> query(
    "UPDATE monthlyrecords SET overTime = '$overTime' WHERE employeeNumber = '$employeeNumber' "
    ))
    {
      echo("Error description: ". $conn->error);
    }
  }


        if (  $type == "2") {
          $sql = "SELECT * FROM monthlyrecords ";
          $result = $conn->query($sql);
          //Store the results in an array
          $overTime = 0;
          while ($row = mysqli_fetch_assoc($result)) {
             $overTime= $row['saturdaysOverTime'];
          }

           $overTime=   $overTime + $overTime1;
          if(!$conn -> query(
      "UPDATE monthlyrecords SET saturdaysOverTime	 = '$overTime' WHERE employeeNumber = '$employeeNumber' "
      ))
      {
        echo("Error description: ". $conn->error);
      }
    }



          if (  $type == "3") {
            $sql = "SELECT * FROM monthlyrecords ";
            $result = $conn->query($sql);
            //Store the results in an array
            $overTime = 0;
            while ($row = mysqli_fetch_assoc($result)) {
               $overTime= $row['holidayOverTime'];
            }

             $overTime=   $overTime + $overTime1;
            if(!$conn -> query(
       "UPDATE monthlyrecords SET holidayOverTime	 = '$overTime' WHERE employeeNumber = '$employeeNumber' "
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
