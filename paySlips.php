


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payroll System | Pay Slips </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

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





$monthProcess =   date("F Y");
$sql = "SELECT * FROM salaries where dateProcessed = '$monthProcess' AND payDate = '$groudGettingPaid'  ";
$result = $conn->query($sql);
//Store the results in an array
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
  $arr[] = $row;
}
  //CLose DB Connection
  CloseCon($conn);

                   foreach ($arr as $row){
                   $totalDeductions = $row['otherDeductions'] + $row['loan'] ;

?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="container mt-5 mb-5">

    <table cellspacing="3" bgcolor="#000000">
	<tr bgcolor="#ffffff">
		<th>Employee Name: <?php echo $row['fullName']; ?></th>
	</tr>
  <tr bgcolor="#ffffff">
    <th>Employee Number: <?php echo $row['employeeNumber']; ?> </th>
  </tr>
</table>
<br>
<br>
<br>
<br>


      <div class="row">
          <div class="col-md-12">
              <div class="text-center lh-1 mb-2">
                  <h3 class="fw-bold">Payslip</h3> <span class="fw-normal">Payment slip for the month of June 2021</span>
              </div>

              <div class="row">

                <table class="mt-2 table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Company details</th>
                            <th scope="col">Employee details</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >
                              <p>Company Name : Farm What What </p>

                            </td>
                            <td >
                              <p>Employee Name :        <?php echo $row['fullName']; ?></p>
                              <p>Employee Number :      <?php echo $row['employeeNumber']; ?></p>
                              <p>Job Title :            <?php echo $row['jobTitle']; ?> </p>
                              <p>Employee Job Code :      <?php echo $row['jobCode']; ?> </p>
                            </td>

                        </tr>
                    </table>


                  <table class="mt-4 table table-bordered">
                      <thead class="bg-dark text-white">
                          <tr>
                              <th scope="col">Earnings</th>
                              <th scope="col">Amount</th>
                              <th scope="col">Deductions</th>
                              <th scope="col">Amount</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">Basic Salary</th>
                              <td>R<?php echo $row['basicSalary']; ?></td>
                              <th>Loans</th>
                              <td>R<?php echo $row['loan']; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">Bonus</th>
                              <td>R<?php echo $row['bonus']; ?></td>
                              <th>Other Deductions</th>
                              <td>R<?php echo $row['otherDeductions']; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">Over-Time</th>
                              <td>R<?php echo $row['overtime']; ?></td>

                          </tr>
                          <tr>
                              <th scope="row">Other Earning</th>
                              <td>R<?php echo $row['otherearning']; ?></td>

                          </tr>

                          <tr class="border-top">
                              <th scope="row">Total Earning</th>
                            <th scope="row">R <?php echo $row['totalWage']; ?></th>
                              <th scope="row"> Total Deductions</th>
                              <th scope="row"> <?php echo $totalDeductions ?></th>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="row">
                  <div class="col-md-4"> <br> <span class="fw-bold"> <h5>Net Pay :R <?php echo $row['totalWage']; ?> </h5> </span> </div>
                  <div class="border col-md-8">
                      <div class="d-flex flex-column"> <span></span> <span> </span> </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <div style='break-after:always'>
  </div>
<div style="break-after:page"></div>
</body>

  <?php
       };
   ?>
   <script>
     window.addEventListener("load", window.print());
   </script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</html>
