<?php  
    $sql = "SELECT * FROM tai_khoan WHERE role= 'nv' OR role = 'qtv'";
    $result = pdo_query($sql);
    print_r($result);
