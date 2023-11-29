<?php 
unset($_SESSION['ten_tai_khoan']);
unset($_SESSION['id_role']);
unset($_SESSION['id_tai_khoan']);
// setcookie('remember', '', time() - 1, '/');
header('location: index.php');
?>