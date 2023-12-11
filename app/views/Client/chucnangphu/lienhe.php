
<div class="login-box mt-5">
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
        <input type="hidden" name="id_tai_khoan" value="<?php echo $_SESSION['id_tai_khoan'];?>">
        <input type="hidden" name="trang_thai" value="Chưa phản hồi">

        <div class="row">
          <!-- /.col -->
          <div class="col-3">

            <button type="submit" name="sendmesage" class="btn btn-primary btn-block">Send Message Contact</button>
          </div>
          
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
