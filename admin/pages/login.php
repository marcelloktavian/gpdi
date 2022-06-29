<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GPdI Bukit Hermon</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)">Log In</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><img src="../assets/images/logo-admin.png" alt=""></p>
      <div id="alert"></div>
      <form action="process-login.php" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username" id="username" name="username" value="<?php echo (isset($_COOKIE['cookie_username']) && $_COOKIE['cookie_username'] !== '') ? $_COOKIE['cookie_username'] : ''; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" <?php echo (isset($_COOKIE['cookie_remember']) && $_COOKIE['cookie_remember'] !== '0') ? 'checked' : ''; ?>>
              <label for="remember">
                Remember Username
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" id="signin" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
document.getElementById("username").focus();

$( "#signin" ).click(function() {
  var username = $('#username').val();
  var password = $('#password').val();
  var remember = $('#remember:checked').length;

  if(username == ''){
    var html = '<div class="alert alert-danger" role="alert">Username Required !!</div>';
    $('#username').focus();
  }else if(password == ''){
    var html = '<div class="alert alert-danger" role="alert">Password Required !!</div>';
    $('#password').focus();
  }else if( username != "" && password != "" ){
    $.ajax({
      url:'pages/process-login.php',
      type:'post',
      data:{username:username,password:password,remember:remember},
      success:function(response){
        if(response == 1){
          // window.location = "index.php";
          location.reload();
        }else{
          var html = '<div class="alert alert-danger" role="alert">Wrong Username or Password !!</div>';
          $("#alert").html(html);
        }
      }
    });
  }
  $("#alert").html(html);
});
</script>
</body>
</html>
