
  <div class="row justify-content-center mt-3">
    <div class="col-md-12">
      <div class="card">
          <ul class="list-group list-group-flush text-left"><?php 
$info = myInfo();
if($info != ""){
    $info = current($tt);
        extract($tt)
        ?>

          <li class="list-group-item"><strong>Ảnh đại diện </strong> <span id="loginname"><img src="public/images/<?=$avt?>" alt="Ảnh đại diện" class="img-fluid mb-3 col-md-2"></span></li>
          <li class="list-group-item"><strong>Tên Đăng Nhập</strong> <h2 id="loginname"><?=$ten_tai_khoan?></h2></li>
            <li class="list-group-item"><strong>Họ và Tên</strong> <h2 id="fullname"><?=$ho_va_ten?></h2></li>
            <li class="list-group-item"><strong>Email</strong> <h2 id="email"><?=$email?></h2></li>
            <li class="list-group-item"><strong>Số Điện Thoại</strong> <h2 id="phone"><?=$so_dien_thoai?></h2></li>
            
<?php }?>
            <li class="list-group-item"><a href=" index.php?redirect=changeMyInfo"><input style="height:35px;width:180px;background-color:#1E74FD; border: 1px solid #1E74FD; border-radius: 5px; color: white;" type="button" value="Cập nhập thông tin"></a></li>
          </ul>
        </div>
      </div>
  </div>


