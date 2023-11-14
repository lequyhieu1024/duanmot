<?php 
unset($_SESSION['ten_tai_khoan']);
unset($_SESSION['id_role']);
header('location:index.php?redirect=login');
?>