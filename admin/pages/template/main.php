<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GPdI Bukit Hermon</title>

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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/images/logo-admin.png" alt="GPdILogo">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
      <img src="../assets/images/gpdi.ico" alt="GPdi Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">GPdI Bukit Hermon</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="javascript:void(0)" class="d-block"><?=$_SESSION['lgnamauser']?></a>
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
            <a href="index.php" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
              User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=usergroup" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Group</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=useraccess" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Access</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=pastors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pastors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=staffs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=komsel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komsel (KeBun)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=jemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Website Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=layout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=banners" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=webheader" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Website Header</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=webfooter" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Website Footer</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Website Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=homepage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Homepage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=story" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Story</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=pastors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pastors & Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=mission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=lwg" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LWG School</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=ppa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PPA Hermon Ministry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=menwomen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Men/Women Ministry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=youth" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Youth Ministry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=children" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Children Church</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=community" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Community</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=online" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Online</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=events" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=care" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Care</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=give" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Give</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=blogs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Administration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=careform" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Form Care</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?page=extension" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                Extension
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=changepass" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" id="logout">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
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
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://gpdibukithermon.org/">GPdI Bukit Hermon Cimahi</a>.</strong>
    All rights reserved.
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
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
  $( "#logout" ).click(function() {
    Swal.fire({
      title: 'Logout',
      text: "Are you sure want to logout?",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'pages/logout.php';
      }
    })
  });
</script>
</body>
</html>
