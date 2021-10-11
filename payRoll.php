

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payroll System | Payroll</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>
    <!-- Left navbar links -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search Employee" aria-label="Search Employee">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Payroll</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="dashboard.php" class="d-block">System Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <a href="dashboard.php" class="nav-link">
                   <i class="nav-icon fas fa-columns"></i>
                   <p>
                  DashBoard
                   </p>
                 </a>
               </li>
            <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Employees
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="addNewEmployee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editEmployeeInfo.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Employee Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" deactiveEmployee.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Employee</p>
                </a>
              </li>
            </ul>
          </li>


                    <li class="nav-item ">
                      <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                        Loans|Bonus|Overtime
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="loans.php" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Loans</p>
                          </a>
                        </li>
                      </ul>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="bonus.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Bonus</p>
                          </a>
                        </li>
                      </ul>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="overtime.php" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Overtime</p>
                          </a>
                        </li>
                      </ul>
                    </li>

          <li class="nav-item">
            <a href="payRoll.php" class="nav-link active">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Payroll
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
              System Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="designation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="payRoll.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log-Out
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Payroll</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payroll</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          <!-- /. Start of the Table for Employees -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Currently Active Employees</h3>
            </div>
            <!-- /.card-header -->
            <div id="tableRefresh" class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th style="width:auto">Full Names</th>
                  <th>Overtime</th>
                  <th>Loan/Credit</th>
                  <th>Bonus</th>
                  <th>Deductions</th>
                  <th>Earning</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                  include 'phpScripts/db_connection.php';
                  $conn = OpenCon();

                   $sql ="SELECT employee_info.jobCode, employee_info.firstname, employee_info.lastname, employee_info.employeeNumber,employee_info.payDate, monthlyrecords.loans, monthlyrecords.bonus,
                    monthlyrecords.overTime, monthlyrecords.saturdaysOverTime, monthlyrecords.holidayOverTime ,designations.jobTitle ,designations.basicSalary,
                   designations.normalOvertime, designations.saturdayOvertime AS saturdayOvertime1 , designations.holidayOvertime AS holidayOvertime1
                    FROM employee_info INNER JOIN monthlyrecords ON  employee_info.employeeNumber = monthlyrecords.employeeNumber
                    INNER JOIN designations ON  designations.jobCode = employee_info.jobCode
                    WHERE monthlyrecords.processed = 'false' ";

                    $result = $conn->query($sql);
                    //Store the results in an array
                    $arr = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                       $arr[] = $row;
                    }
                    //CLose DB Connection
                    CloseCon($conn);
                    //Session the Employees array

                                     foreach ($arr as $row){
                                     $Overtime = ($row['overTime'] * $row['normalOvertime'] ) + ( $row['saturdaysOverTime'] * $row['saturdayOvertime1'] ) + ( $row['holidayOverTime'] * $row['holidayOvertime1'] );
                                    // method="POST" action="phpScripts/uploadPayroll.php"
                  ?>



                <tr>
                  <form target="target"  method="POST" action="phpScripts/uploadPayroll.php"  >
                  <td> <?php echo $row['employeeNumber']; ?></td>
                  <td> <?php echo $row['firstname'].' '.$row['lastname']; ?> </td>
                  <td>R<?php echo $Overtime ?> </td>
                  <td>R<?php echo $row['loans']; ?></td>
                  <td>R<?php echo $row['bonus']; ?> </td>

                  <td>
                    <div class="form-group">
                      <input style="width:100px ; height:30px" type="numbers"  class="form-control" id="deductions" name="deductions" value="0">
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <input hidden id="emp" name="emp" value="<?php echo $row['employeeNumber']; ?>">
                      <input type="numbers" style="width:100px; height:30px" class="form-control" id="earning" name="earning" value="0">
                      <input hidden class="form-control"  required id="name" name="name" value="<?php echo $row['firstname'].' '.$row['lastname']; ?>">
                      <input hidden class="form-control"  required id="overTime" name="overTime" value="<?php echo $Overtime ?>">

                      <input hidden class="form-control"  required id="loans" name="loans" value="<?php echo $row['loans']; ?>">
                      <input hidden class="form-control"  required id="bonus" name="bonus" value="<?php echo $row['bonus'] ?>">
                      <input hidden class="form-control"  required id="jobTitle" name="jobTitle" value="<?php echo $row['jobTitle'] ?>">

                      <input hidden class="form-control"  required id="basicSalary" name="basicSalary" value="<?php echo $row['basicSalary']; ?>">
                      <input hidden class="form-control"  required id="payDate" name="payDate" value="<?php echo $row['payDate'] ?>">
                      <input hidden class="form-control"  required id="jobCode" name="jobCode" value="<?php echo $row['jobCode']; ?>">
                    </div>
                  </td>

                <td>  <button onclick="this.form.submit(); this.disabled = true;" name="employment" id="employment" style="margin-Bottom:10px; width: 80%; margin-left:10%; margin-right:10%" type="submit" class="btn btn-success editbtn">Save</button></td>
              </form>
               </tr>

                <?php
                     };
                 ?>

                </tbody>
              </table>
              <div row>
              <button style="margin-Bottom:10px; width: auto; margin-left:auto; margin-right:auto"  onclick="window.location.href='payRoll.php'" class="btn btn-success">Reload Payroll</button>
              <button style="margin-Bottom:10px; width: auto; margin-left:auto; margin-right:auto"  onclick=" window.open('paySlips.php','_blank')" class="btn btn-success">Print Pay-Slips</button>

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.End Card AND End of Table -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <iframe style="display:none;" name="target"></iframe>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->



<script>
$(document).ready(function(){
    $('.editbtn').click(function(){
        $(this).html($(this).html() == 'Save' ? 'Saved' : 'saved');

    });
});


  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": []
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>




<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
