<?php 
function binhluankhoahoc() {
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "SELECT binh_luan.*,tai_khoan.avt as avt_tk,tai_khoan.ten_tai_khoan  FROM binh_luan
    JOIN khoa_hoc ON binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    JOIN tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id_tai_khoan
    WHERE binh_luan.id_khoa_hoc = '$id_khoa_hoc'";
    $result = pdo_query($sql);
    return $result; 
}
function addbinhluan($id_tai_khoan,$id_khoa_hoc,$noi_dung_binh_luan,$ngay_binh_luan) {
    $sql = "INSERT INTO binh_luan( id_tai_khoan, id_khoa_hoc, noi_dung_binh_luan, ngay_binh_luan) VALUES ('$id_tai_khoan','$id_khoa_hoc','$noi_dung_binh_luan','$ngay_binh_luan')";
    pdo_execute($sql);
}
function adddanhgia($id_tai_khoan,$id_khoa_hoc,$danh_gia){
    $sql = "INSERT INTO danh_gia(id_tai_khoan, id_khoa_hoc,danh_gia) VALUES ('$id_tai_khoan','$id_khoa_hoc','$danh_gia')";
    pdo_execute($sql);
}
function checkdanhgia(){
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT * FROM danh_gia WHERE id_khoa_hoc = '$id_khoa_hoc' AND id_tai_khoan='$id_tai_khoan'";
    $result = pdo_query($sql);
    return $result;
}
?>