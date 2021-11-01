<?php
include 'phpScripts/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM designations ";
$result = $conn->query($sql);
//Store the results in an array
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
   $arr[] = $row;
}
//CLose DB Connection
CloseCon($conn);
//Session the designations array
$_SESSION["designations"] = $arr;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payroll System | Designations</title>

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
    <!-- Left navbar links -->
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

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
              Loans|Bonus|Overtime
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="loans.php" class="nav-link">
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
                <a href="overtime.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Overtime</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="payRoll.php" class="nav-link ">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Payroll
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active ">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
              System Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="designation.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="phpScripts/rest_session.php" class="nav-link">
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
            <h1 class="m-0">Designations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Designations</li>
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
              <h3 class="card-title">Designations</h3>

                <button type="button" style="width :auto; float:right" data-toggle="modal" data-target="#modal-add-designation" class="btn btn-block btn-success btn-sm">New Designation </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Designation ID</th>
                  <th>Designation Title</th>
                  <th>Salary</th>
                  <th>Normal Overtime</th>
                  <th>Saturday Overtime</th>
                  <th>Sunday/Holiday Overtime</th>
                  <th>Action </th>
                </tr>
                </thead>
                <tbody>

                  <?php

                                    $arr = $_SESSION["designations"];
                                     foreach ($arr as $row){

                  ?>
                <tr>
                  <td> <?php echo $row['jobCode']; ?> </td>
                  <td> <?php echo $row['jobTitle']; ?> </td>
                  <td> R<?php echo $row['basicSalary']; ?> </td>
                  <td> R<?php echo $row['normalOvertime']; ?> </td>
                  <td> R<?php echo $row['saturdayOvertime']; ?> </td>
                  <td> R<?php echo $row['holidayOvertime']; ?></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#message<?php echo $row['jobCode'];?>" class="btn btn-block btn-secondary btn-sm">Edit</button>
                  </td>
                </tr>


                          <div class="modal fade" role="dialog" id="message<?php echo $row['jobCode'];?>">
                            <div class="modal-dialog">
                              <form method="POST" action="phpScripts/updateDesignation.php">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Designation</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Job Title</label>
                                   <input required  class="form-control" id="jobTitle" name="jobTitle" disabled value="<?php echo $row['jobTitle']; ?> ">
                                  </div>
                                  <div class="form-group">
                                     <label for="exampleInputEmail1">Job Code</label>
                                     <input required  class="form-control" id="jobCode" name="jobCode" disabled value="<?php echo $row['jobCode']; ?> ">
                                    </div>

                                    <div class="form-group">
                                       <input hidden  class="form-control" id="j4" name="j4"  value="<?php echo $row['jobCode']; ?> ">
                                      </div>

                                    <div class="form-group">
                                      <label for="lastname">Basic Salary In Rands</label>
                                      <input required type="number" maxlength="10" class="form-control" required id="basicSalary" name="basicSalary" value="<?php echo $row['basicSalary']; ?>">
                                    </div>

                                    <div class="form-group">
                                      <label for="lastname">Normal Overtime Rate Per Hour</label>
                                      <input required type="number" maxlength="10" class="form-control" required id="normalOvertime" name="normalOvertime" value="<?php echo $row['normalOvertime']; ?>">
                                    </div>
                                    <div class="form-group">
                                      <label for="lastname">Saturday Overtime Rate Per Hour</label>
                                      <input required type="number" maxlength="10" class="form-control" required id="saturdayOvertime" name="saturdayOvertime" value="<?php echo $row['saturdayOvertime']; ?>">
                                    </div>
                                    <div class="form-group">
                                      <label for="lastname">Sunday/Holiday Overtime Rate Per Hour</label>
                                      <input required type="number" maxlength="10" class="form-control" required id="holidayOvertime" name="holidayOvertime" value="<?php echo $row['holidayOvertime']; ?>">
                                    </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </form>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                <?php
            };
            ?>

                </tbody>
              </table>

            </div>
            <!-- /.card-body -->
          </div>


          <div class="modal fade" id="modal-add-designation">
            <div class="modal-dialog">
              <form method="POST" action="phpScripts/insertDesignation.php">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">New Designation</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                   <label for="jobTitle">Job Title</label>
                   <input required type="text" class="form-control" id="jobTitle" name="jobTitle"  placeholder="">
                  </div>
                  <div class="form-group">
                     <label for="jobCode">Job Code</label>
                     <input required type="text" class="form-control" id="jobCode" name="jobCode" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="basicSalary">Basic Salary In Rands</label>
                      <input required type="number" maxlength="10" class="form-control" required id="basicSalary" name="basicSalary" placeholder="R:">
                    </div>
                    <div class="form-group">
                      <label for="normalOvertime">Normal Overtime Rate Per Hour</label>
                      <input required type="number" maxlength="10" class="form-control" required id="normalOvertime" name="normalOvertime" placeholder="R:">
                    </div>
                    <div class="form-group">
                      <label for="saturdayOvertime">Saturday Overtime Rate Per Hour</label>
                      <input required type="number" maxlength="10" class="form-control" required id="saturdayOvertime" name="saturdayOvertime" placeholder="R:">
                    </div>
                    <div class="form-group">
                      <label for="lastname">Sunday/Holiday Overtime Rate Per Hour</label>
                      <input required type="number" maxlength="10" class="form-control" required id="holidayOvertime" name="holidayOvertime" placeholder="R:">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add Designation</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </form>
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.End Card AND End of Table -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

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
