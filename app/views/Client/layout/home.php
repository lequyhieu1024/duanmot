<h1>HOME</h1>
<a href="index.php?redirect=login">đăng nhập</a><br>
<a href="index.php?redirect=logout">đăng xuất</a><br>
<a href="index.php?redirect=unsetcookie">đăng xuất vĩnh viễn</a><br>
<?php echo $_SESSION['id_role']; echo "<br/>";
 echo $_SESSION['ten_tai_khoan']; echo "<br/>";?>
 =============================================
 <?php 
 if($_SESSION['id_role']==3){
    echo '<a href="app/views/admin/index.php">Đến trang quản trị viên</a> ';
 }
 include'app/models/clientmodel/loadallsp.php';
 ?>