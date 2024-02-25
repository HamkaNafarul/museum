<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url()?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url()?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url()?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-color: #5347D8;">
<div class="">
  <div class="col-lg-12" align="center" style="padding-top: 10%;">
    <h1><b style="color: white;">SELAMAT DATANG</b></h1>
    <h3><b style="color: white;">INVENTARIS MUSEUM BRAWIJAYA MALANG</b></h3>
  </div>
  <!-- /.login-logo -->
  <div class="col-lg-12" align="center">
    <div class="card" style="width: 360px;">
      <div class="row" style="margin-top: 10%;">
          <div class="col-sm-12">
            <img style="width: 82px;height: 97px;" src="image1.png">
            <img style="" src="line.png">
            <img style="width: 82px;height: 97px;" src="image2.png">
          </div>
      </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Admin</p>
      <form action="<?php echo site_url()?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <a href="<?php echo site_url()?>/dashboard" class="btn btn-primary btn-block">Sign In</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
  
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo site_url()?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url()?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url()?>/dist/js/adminlte.min.js"></script>
</body>
</html>
