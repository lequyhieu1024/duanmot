<?php 
    $sql = "SELECT * FROM tai_khoan WHERE role = 'hv'";
    $result = pdo_query($sql);
    print_r($result);