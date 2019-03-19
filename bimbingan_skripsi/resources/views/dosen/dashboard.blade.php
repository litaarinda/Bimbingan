<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | Dosen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="icon" type="image/jpg" href="{{asset('images/topi.jpg')}}">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">


  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>Sn</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Welcome</b>Dosen</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color:black;">Alexander Pierce</p>
          <!-- Status -->
          <a href="#" style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
          
        </div> 
      </div>



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" style="background:white">
        <li class="header">
        </span></li>
        <li class="header"><span class="pull-right">
          <a href="{{ url('/dosen/logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out">Logout</i>
      </a>
      <form id="logout-form" action="{{ url('/dosen/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
        </li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview"><a href="#"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="treeview"><a href="#"><i class="fa fa-graduation-cap"></i> <span>Daftar mahasiswa</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i> <span>Riwayat Bimbingan</span>
          </a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
        <h1> Dashboard</h1>
       </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>