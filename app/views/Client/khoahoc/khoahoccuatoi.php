
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php 
if(empty($_SESSION['ten_tai_khoan'])){
  echo 'Chưa đăng nhập';
}else{
 $myCources = khoahoccuatoi();?>
 <div class="container" style="margin:30px">
  <h1>Khóa học của tôi</h1>
    <table class="table">
        <?php  foreach($myCources as $mc):extract($mc); ?>   
        <tr>
          <td><img style="width:100px" src="public/images/<?=$avt_kh?>" alt=""></td>
          <td><h1><?=$ten_khoa_hoc?></h1></td>
          <td>Giảng viên:<?=$ma_giang_vien?></td>
          <td><h2>$ <?=$thanh_tien?></h2></td>
          <td><a href="index.php?redirect=chitietkhcuatoi&id_khoa_hoc=<?=$id_khoa_hoc?>"> <?=$ten_trang_thai?></a></td>
        </tr>
        <?php endforeach; }?>
    </table>
  </div>
