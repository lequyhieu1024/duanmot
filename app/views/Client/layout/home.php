<?php 
    if($_SESSION['id_role']==3){
        echo '<a href="app/views/admin/index.php">đến trang qtv</a>';
    }
    echo $_SESSION['id_role'];
    echo $_SESSION['ten_tai_khoan'];
    ?><a href="index.php?redirect=logout">Đăng Xuất</a>