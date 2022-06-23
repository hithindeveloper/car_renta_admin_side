
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Car Rental System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="carreview.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><i class="fa fa-cab"></i></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><i class="fa fa-cab"></i> Car</b>Rental</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Sample Name</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                 Sample Name
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-center">
              <a class="btn btn-danger" style="width: 100%" href="index.php"><i class="fa fa-spinner fa-spin"></i> Log out</a>                
            </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Sample Name</p>
          <a href="#"><i class="fa fa-circle text-success"></i> User</a>
        </div>
      </div> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation Forms</li>
        <li >
          <a href="carreview.php">
            <i class="fa fa-cab"></i> <span>Car Review</span>
          </a>
        </li>
        <li>
          <a href="cargallery.php">
            <i class="fa fa-cab"></i> <span>Car Gallery</span>
          </a>
        </li>
        <li>
          <a href="rental.php">
            <i class="fa fa-cab"></i> <span>Rental</span>
          </a>
        </li>
        <li class="active">
          <a href="payment.php">
            <i class="fa fa-money"></i> <span>Payment</span>
          </a>
        </li>
        <li>
          <a href="costumercredential.php">
            <i class="fa fa-files-o"></i> <span>Costumer Credential</span>
          </a>
        </li>
        <li>
          <a href="carownercredential.php">
            <i class="fa fa-cab"></i> <span>Car Owner Credential</span>
          </a>
        </li>
        <li >
          <a href="useraccount.php">
            <i class="fa fa-user-secret"></i> <span>User Account</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Encoding</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="car.php"><i class="fa fa-circle-o"></i> Car</a></li>
            <li><a href="costumer.php"><i class="fa fa-circle-o"></i> Costumer</a></li>
            <li><a href="carowner.php"><i class="fa fa-circle-o"></i> Car Owner</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        <i class="fa fa-money"></i> Payment
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-money"></i> Payment Data Table</h3><button type="button" class="btn btn-success btn-sm" style="margin-left: 2%" data-toggle="modal" data-target="#add">
               <i class="fa fa-plus"></i> Add
              </button>
        <div class="modal fade" id="add">
          <div class="modal-dialog">
            <form role="form">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Payment</h4>
              </div>
              <div class="modal-body">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Fill In : </h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Select Rental Date</label>
                  <select class="form-control">
                    <option>Data</option>
                    <option>Data</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Rental Time</label>
                  <select  class="form-control">
                    <option>Data</option>
                    <option>Data</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >Payment</label>
                  <input type="number" class="form-control" placeholder="Enter Payment Amount" style="width: 70%"> 
                  <div style="margin-left: 74%; margin-top: -10.5%"> 
                  <label >Add Charge</label>
                  <input type="number" class="form-control" placeholder="00,00" style="width: 60%">
                  </div>
                </div>
                <div class="form-group">
                  <label >Date Pay</label>
                  <input type="date" class="form-control" > 
                </div>
              </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="background-color: #c5c5c5;">
                  <th ><i class="fa fa-calendar"></i> Rental Date</th>
                  <th ><i class="fa fa-clock-o"></i> Time</th>
                  <th ><i class="fa fa-money"></i> Payment</th>
                  <th><i class="fa fa-plus"></i> Charges</th>
                  <th><i class="fa fa-calendar"></i> Date Payed</th>
                  <th><i class="fa fa-keyboard-o"></i> Encode By</th>
                  <th style="width: 11.8%"> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Sept. 12, 2020</td>
                  <td>10:00pm</td>
                  <td>10,000</td>
                  <td>1,000</td>
                  <td>January 12, 2020</td>
                  <td align="center"><span class="btn btn-warning btn-xs">User 1</span></td>
                  <td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#charge"><i class="fa fa-plus"></i></button></td>
                </tr>
                <tr>
                  <td>Sept. 12, 2020</td>
                  <td>10:00pm</td>
                  <td>10,000</td>
                  <td>1,000</td>
                  <td>January 12, 2020</td>
                  <td align="center"><span class="btn btn-warning btn-xs">User 1</span></td>
                  <td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-targe><i class="fa fa-plus" ></i></button></td>
                </tr>
                </tbody>
                <tfoot>
                <tr style="background-color: #c5c5c5;">
                  <th >Rental Date</th>
                  <th> Time</th>
                  <th >Payment</th>
                  <th> Charges</th>
                  <th> Date Payed</th>
                  <th> Encode By</th>
                  <th> </th>
                </tr>
                </tfoot>
              </table>
        <div class="modal fade" id="edit">
          <div class="modal-dialog">
             <form role="form">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Payment</h4>
              </div>
              <div class="modal-body">
            <div class="box box-warning">
            <div class="box-header with-border">
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Select Rental Date</label>
                  <select class="form-control">
                    <option>Data</option>
                    <option>Data</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Rental Time</label>
                  <select  class="form-control">
                    <option>Data</option>
                    <option>Data</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >Payment</label>
                  <input type="number" class="form-control" placeholder="Enter Payment Amount" style="width: 70%"> 
                  <div style="margin-left: 74%; margin-top: -10.5%"> 
                  <label >Add Charge</label>
                  <input type="number" class="form-control" placeholder="00,00" style="width: 60%">
                  </div>
                </div>
                <div class="form-group">
                  <label >Date Pay</label>
                  <input type="date" class="form-control" > 
                </div>
              </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->    
        <div class="modal fade" id="charge" >
          <div class="modal-dialog">
             <form role="form">
            <div class="modal-content" style="width: 30%;margin-left: 120%; margin-top: 40%; background-color: #0bab5f;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
              <div class="box-body">
                <div class="form-group">
                  <label style="color:white" >Add Charge</label>
                  <input type="number" class="form-control" > 
                </div>
              </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="margin-right: 30%">Submit</button>
              </div>
            </div>
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>       
      </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">Car Rental System</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
