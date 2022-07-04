<?php
include '../config/koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GPdI Bukit Hermon</title>

  <?php include 'pages/view/global_head.php'; ?>

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
  <?php include 'pages/view/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
      if(!isset($_GET['p']) || $_GET['p']=='' || $_GET['p']=='home'){
          // include "pages/homepage/homepage.php";
        }else if(isset($_GET['p']) && $_GET['p']=='user'){
          // include "pages/user_management/user.php";
        }else if(isset($_GET['p']) && $_GET['p']=='usergroup'){
          // include "pages/user_management/usergroup.php";
        }else if(isset($_GET['p']) && $_GET['p']=='useraccess'){
          // include "pages/user_management/useraccess.php";
        }else if(isset($_GET['p']) && $_GET['p']=='pastors'){
          // include "pages/master_data/pastors.php";
        }else if(isset($_GET['p']) && $_GET['p']=='staffs'){
          // include "pages/master_data/staffs.php";
        }else if(isset($_GET['p']) && $_GET['p']=='komsel'){
          include "pages/master_data/komsel.php";
        }else if(isset($_GET['p']) && $_GET['p']=='jemaat'){
          // include "pages/master_data/jemaat.php";
        }
        else{
            include "pages/404.php";
        }
    ?>
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

<?php include 'pages/view/global_script.php'; ?>

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