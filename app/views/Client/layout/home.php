home
<a href="index.php?redirect=login">đăng nhập</a>
<a href="index.php?redirect=logout">đăng xuất</a>
<a href="index.php?redirect=unsetcookie">đăng xuất vĩnh viễn</a>
<?php echo $_SESSION['role']; echo "<br/>";
 echo $_SESSION['ten_tai_khoan']; echo "<br/>";?>
 =============================================
 <?php 
 if($_SESSION['role']==3){
    echo '<a href="app/views/admin/index.php">đến tragn quản trị viên</a> ';
 }
 include'app/models/clientmodel/loadallsp.php';
 ?>