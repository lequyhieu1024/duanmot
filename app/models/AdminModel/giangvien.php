<?php 
function giang_vien() {
    $sql = "SELECT * FROM giang_vien";
    $result = pdo_query($sql);
    return $result;
}
function addgiangvien($id_giang_vien,$ma_giang_vien,$ten_giang_vien,$email,$avt,$so_dien_thoai,$mo_ta,$nam_sinh) {
    $sql = "INSERT INTO giang_vien(id_giang_vien,ma_giang_vien,ten_giang_vien,email,avt,so_dien_thoai,mo_ta,nam_sinh) VALUES ('$id_giang_vien','$ma_giang_vien','$ten_giang_vien','$email','$avt','$so_dien_thoai','$mo_ta','$nam_sinh')";
    pdo_execute($sql);
}
function editgiangvien($id_giang_vien,$ma_giang_vien,$ten_giang_vien,$email,$avt,$so_dien_thoai,$mo_ta,$nam_sinh) {
    $sql = "UPDATE giang_vien  SET `id_giang_vien`='$id_giang_vien',`ten_giang_vien`='$ten_giang_vien',`ma_giang_vien`='$ma_giang_vien',`email`='$email',`avt`='$avt',`so_dien_thoai`='$so_dien_thoai',`mo_ta`='$mo_ta',`nam_sinh`='$nam_sinh' WHERE id_giang_vien = '$id_giang_vien'";
    pdo_execute($sql);

}
?>