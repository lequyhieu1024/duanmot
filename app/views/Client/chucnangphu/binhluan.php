<?php 
$id_khoa_hoc = $_GET['id_khoa_hoc']?>
      <p class="login-box-msg">Bình luận</p>
      <form action="index.php?redirect=addbinhluan" method="post">
        <div class="input-group mb-2">
          <input type="text" class="form-control" required name="noi_dung_binh_luan" placeholder="Nhập bình luận của bạn">
          <div class="input-group-append">
          </div>
        </div>
        <input type="hidden" name="ngay_binh_luan" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <input type="hidden" name="id_khoa_hoc" value="<?=$id_khoa_hoc ?>">
        <input type="hidden" name="id_tai_khoan" value="<?php echo $_SESSION['id_tai_khoan'];?>">
        Đánh giá :
        <select name="danh_gia" id="">
          <option value="5">5 </option>
          <option value="4">4</option>
          <option value="3">3</option>
          <option value="2">2</option>
          <option value="1">1</option>
        </select><i class="fa fa-star" style="color: #f5cd3d;"></i>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="addbinhluan" class="btn btn-primary btn-block">Bình luận</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    