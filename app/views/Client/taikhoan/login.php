
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login| Learn IT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng nhập</p>

      <form action="../../../../index.php?redirect=login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" required name="ten_tai_khoan" placeholder="Tên tài khoản">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" required name="mat_khau" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span></span>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Nhập</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Đăng nhập bằng Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Đăng nhập bằng Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgotpass.php">Quên mật khẩu</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Đăng ký tài khoản mới</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
<!-- /.login-box -->
</div>
</body>
<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.min.js"></script>