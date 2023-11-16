<h1>HOME</h1>
<a href="index.php?redirect=login">Đăng nhập</a><br>
<a href="index.php?redirect=logout">Đăng xuất</a><br>
<a href="index.php?redirect=unsetcookie">Đăng xuất vĩnh viễn</a><br>
<?php echo $_SESSION['id_role']; echo "<br/>";
 echo $_SESSION['ten_tai_khoan']; echo "<br/>";?>
 ============================================= <br>
 <?php 
 if($_SESSION['id_role']==3){
    echo '<a href="app/views/admin/index.php">đến trang quản trị viên</a> ';
 }
 include'app/models/clientmodel/loadallsp.php';
 ?>