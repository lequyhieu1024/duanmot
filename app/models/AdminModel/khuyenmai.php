<?php 
function addkhuyenmai($id_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$ten_khuyen_mai,$noi_dung) {
    $sql = "INSERT INTO khuyen_mai(ngay_ket_thuc,ten_khuyen_mai,ngay_bat_dau,noi_dung) VALUES ('$ngay_ket_thuc','$ten_khuyen_mai','$ngay_bat_dau','$noi_dung')";
    pdo_execute($sql);
}
function editkhuyenmai($id_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$ten_khuyen_mai,$noi_dung){  
    $sql = "UPDATE khuyen_mai SET id_khuyen_mai='$id_khuyen_mai', ten_khuyen_mai='$ten_khuyen_mai', ngay_bat_dau='$ngay_bat_dau', ngay_ket_thuc='$ngay_ket_thuc', noi_dung='$noi_dung' WHERE id_khuyen_mai ='$id_khuyen_mai'";
    pdo_execute($sql);
}
?>