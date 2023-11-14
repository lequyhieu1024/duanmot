<?php
  if(isset($_POST["sendmesage"])){
    if(isset($_SESSION['ten_tai_khoan'])){
    $noi_dung = $_POST['noi_dung'];
    $ten_tai_khoan = $_POST['ten_tai_khoan'];
    $ngay_lien_he = $_POST['ngay_lien_he'];
    $trang_thai = $_POST['trang_thai'];
    $sql = "INSERT INTO lien_he(noi_dung,ngay_lien_he,ten_tai_khoan,trang_thai) VALUES('$noi_dung', '$ngay_lien_he','$ten_tai_khoan','$trang_thai')";
    pdo_execute($sql);
  }else{
    echo '<script>alert("Hãy đăng nhập để gửi liên hệ")</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>học IT để làm | Liên Hệ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Liên Hệ</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Liên Hệ với Admin</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" required name="noi_dung" placeholder="Nhập vấn đề mà bạn gặp">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <input type="hidden" name="ngay_lien_he" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <input type="hidden" name="ten_tai_khoan" value="<?php echo $_SESSION['ten_tai_khoan'];?>">
        <input type="hidden" name="trang_thai" value="Chưa phản hồi">
        <div class="row">
          <!-- /.col -->
          <div class="col-8">
            <button type="submit" name="sendmesage" class="btn btn-primary btn-block">Send Message Contact</button>
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
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>