<?php 
$info = myInfo();
if($info != ""){
    $info = current($tt);
        extract($tt)
        ?>
  <div class="row justify-content-center mt-3">
    <div class="col-md-12">
      <div class="card">
          <ul class="list-group list-group-flush text-left">
          <li class="list-group-item"><strong>Ảnh đại diện </strong> <span id="loginname"><img src="public/images/<?=$avt?>" alt="Ảnh đại diện" class="img-fluid mb-3 col-md-2"></span></li>
          <li class="list-group-item"><strong>Tên Đăng Nhập</strong> <h2 id="loginname"><?=$ten_tai_khoan?></h2></li>
            <li class="list-group-item"><strong>Họ và Tên</strong> <h2 id="fullname"><?=$ho_va_ten?></h2></li>
            <li class="list-group-item"><strong>Email</strong> <h2 id="email"><?=$email?></h2></li>
            <li class="list-group-item"><strong>Số Điện Thoại</strong> <h2 id="phone"><?=$so_dien_thoai?></h2></li>
            <li class="list-group-item"><strong>Mật Khẩu:</strong>
                <?php $sl = strlen($mat_khau);
                for ($i = 0; $i < $sl; $i++) {
                echo '*';
                }?></li>
          </ul>
        </div>
      </div>
  </div>
<?php }?>


