<?php 
function dem_tai_khoan() {
    $sql = "SELECT COUNT(id_tai_khoan) as so_luong FROM tai_khoan";
    $rows =pdo_query_one($sql);
    $so_luong = $rows['so_luong'];
    return $so_luong;
}
function addtaikhoan($id_tai_khoan,$ten_tai_khoan,$email,$nam_sinh,$avt,$so_dien_thoai,$id_role,$ho_va_ten,$mat_khau){
    $sql = "INSERT INTO tai_khoan(ten_tai_khoan,email,nam_sinh,avt,so_dien_thoai,id_role,ho_va_ten,mat_khau) VALUES ('$ten_tai_khoan','$email','$nam_sinh','$avt','$so_dien_thoai','$id_role','$ho_va_ten','$mat_khau')";
    pdo_execute($sql);
}
function edittaikhoan($id_tai_khoan,$ten_tai_khoan,$email,$nam_sinh,$avt,$so_dien_thoai,$id_role,$ho_va_ten,$mat_khau){
    $sql = "UPDATE tai_khoan SET `id_tai_khoan`='$id_tai_khoan',`ten_tai_khoan`='$ten_tai_khoan',`ho_va_ten`='$ho_va_ten',`email`='$email',`nam_sinh`='$nam_sinh',`mat_khau`='$mat_khau',`avt`='$avt',`so_dien_thoai`='$so_dien_thoai',`id_role`='$id_role' WHERE id_tai_khoan ='$id_tai_khoan'";
    pdo_execute($sql);
}
?>