<?php 
unset($_SESSION['ten_tai_khoan']);
unset($_SESSION['role']);
header('location:index.php?redirect=login');
setcookie('remember', '', time() - 1, '/');
header('location: index.php?redirect=login');
?>