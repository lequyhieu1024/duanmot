<?php 
function khoahoc() {
    $sql = "SELECT *, khoa_hoc.trang_thai,giang_vien.ma_giang_vien,khoa_hoc.avt
    FROM khoa_hoc
    JOIN danh_muc_khoa_hoc ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc
    JOIN giang_vien ON giang_vien.id_giang_vien = khoa_hoc.id_giang_vien;";
    $result = pdo_query($sql);
    return $result;
}
function kh_theo_dm(){
    if(isset($_GET['id_danh_muc'])){
        $id_danh_muc = $_GET['id_danh_muc'];
        $sql = "SELECT * FROM khoa_hoc WHERE id_danh_muc = '$id_danh_muc'";
        $result = pdo_query($sql);
        return $result;
    }
}
function dem_khoa_hoc() {
    $sql = "SELECT COUNT(id_khoa_hoc) as so_luong FROM khoa_hoc";
    $rows =pdo_query_one($sql);
    $so_luong = $rows['so_luong'];
    return $so_luong;
}

?>