<?php 
function alldanhmuc(){
    $sql = "SELECT * FROM danh_muc_khoa_hoc WHERE trang_thai ='show' ";
    $result = pdo_query($sql);
    return $result;
}
?>