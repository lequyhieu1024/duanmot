<?php 
function dem_tai_khoan() {
    $sql = "SELECT COUNT(id_tai_khoan) as so_luong FROM tai_khoan";
    $rows =pdo_query_one($sql);
    $so_luong = $rows['so_luong'];
    return $so_luong;
}
?>