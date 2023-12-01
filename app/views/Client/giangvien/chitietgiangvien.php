<?php 
$gv = chitietgiangvien();
foreach($gv as $gv){
        extract($gv)
        ?>
  <div class="row justify-content-center mt-3">
    <div class="col-md-12">
      <div class="card">
          <ul class="list-group list-group-flush text-left">
          <li class="list-group-item"><strong>Ảnh đại diện </strong> <span id="loginname"><img src="public/images/<?=$avt?>" alt="Ảnh đại diện" class="img-fluid mb-3 col-md-2"></span></li>
            <li class="list-group-item"><strong>Họ và Tên</strong> <h2 id="fullname"><?=$ten_giang_vien?></h2></li>
            <li class="list-group-item"><strong>Email</strong> <h2 id="email"><?=$email?></h2></li>
            <li class="list-group-item"><strong>Số Điện Thoại</strong> <h2 id="phone"><?=$so_dien_thoai?></h2></li>
            <li class="list-group-item"><strong>Thông tin</strong> <h2 id="phone"><?=$mo_ta?></h2></li>
          </ul>
        </div>
      </div>
  </div>
<?php }?>


