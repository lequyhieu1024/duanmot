<?php 
function kh_theo_dm(){
    if(isset($_GET['id_danh_muc'])){
        $id_danh_muc = $_GET['id_danh_muc'];
        $sql = "SELECT * FROM khoa_hoc WHERE id_danh_muc = '$id_danh_muc'";
        $result = pdo_query($sql);
        return $result;
    }
}
function khoahoc() {
    $sql = "SELECT *,khoa_hoc.id_khoa_hoc,khoa_hoc.mo_ta, khoa_hoc.trang_thai,giang_vien.ma_giang_vien,khoa_hoc.avt, avg(binh_luan.danh_gia) as avg_rate
    FROM khoa_hoc
    JOIN danh_muc_khoa_hoc ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc
    LEFT JOIN binh_luan ON binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    JOIN giang_vien ON giang_vien.id_giang_vien = khoa_hoc.id_giang_vien GROUP BY khoa_hoc.id_khoa_hoc DESC";
    $result = pdo_query($sql);
    return $result;
}
function khoahocnhieuluotxem () {
    $sql ="SELECT * FROM khoa_hoc ORDER BY so_luot_xem DESC";
    $result = pdo_query($sql);
    return $result;
}
function updateview() {
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "UPDATE khoa_hoc SET so_luot_xem = so_luot_xem + 1 WHERE id_khoa_hoc = '$id_khoa_hoc'";
    pdo_execute($sql);
}
function chitietkhoahoc(){
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "SELECT khoa_hoc.*, khoa_hoc.avt as avt_kh, giang_vien.avt as avt_gv, giang_vien.mo_ta as mota_gv, khoa_hoc.trang_thai, danh_muc_khoa_hoc.ten_danh_muc, avg(binh_luan.danh_gia) as danh_gia
            FROM khoa_hoc
            JOIN danh_muc_khoa_hoc ON danh_muc_khoa_hoc.id_danh_muc = khoa_hoc.id_danh_muc 
            JOIN giang_vien ON khoa_hoc.id_giang_vien = giang_vien.id_giang_vien
            LEFT JOIN binh_luan ON khoa_hoc.id_khoa_hoc = binh_luan.id_khoa_hoc
            WHERE khoa_hoc.id_khoa_hoc = '$id_khoa_hoc'";
    $result = pdo_query($sql);
    return $result;
}
function dem_kh_cua_toi(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT count(*) as so_luong FROM dang_ky_khoa_hoc WHERE id_tai_khoan = '$id_tai_khoan'";
    $rows =pdo_query_one($sql);
    $so_luong = $rows['so_luong'];
    return $so_luong;
}
function khoahoccuatoi(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT dang_ky_khoa_hoc.trang_thai,khoa_hoc.id_khoa_hoc, khoa_hoc.avt as avt_kh,trang_thai.ten_trang_thai, khoa_hoc.ten_khoa_hoc,giang_vien.ma_giang_vien,
    khoa_hoc.tien_hoc
    FROM dang_ky_khoa_hoc
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = dang_ky_khoa_hoc.id_khoa_hoc
    JOIN tai_khoan ON tai_khoan.id_tai_khoan = dang_ky_khoa_hoc.id_tai_khoan
    JOIN trang_thai ON trang_thai.id_trang_thai = dang_ky_khoa_hoc.trang_thai
    JOIN giang_vien ON giang_vien.id_giang_vien = dang_ky_khoa_hoc.id_giang_vien
    LEFT JOIN khuyen_mai ON khuyen_mai.id_khuyen_mai = dang_ky_khoa_hoc.id_khuyen_mai
    WHERE dang_ky_khoa_hoc.id_tai_khoan = '$id_tai_khoan'";
    $results = pdo_query($sql);
    return $results;
}
function chitietkhcuatoi($id_khoa_hoc){
    $sql = "SELECT dang_ky_khoa_hoc.id_dang_ky_khoa_hoc,dang_ky_khoa_hoc.trang_thai,khoa_hoc.id_khoa_hoc, khoa_hoc.avt as avt_kh,trang_thai.ten_trang_thai,trang_thai.id_trang_thai, khoa_hoc.ten_khoa_hoc,giang_vien.ma_giang_vien,
    khoa_hoc.tien_hoc
    FROM dang_ky_khoa_hoc
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = dang_ky_khoa_hoc.id_khoa_hoc
    JOIN tai_khoan ON tai_khoan.id_tai_khoan = dang_ky_khoa_hoc.id_tai_khoan
    JOIN giang_vien ON giang_vien.id_giang_vien = dang_ky_khoa_hoc.id_giang_vien
    JOIN trang_thai ON trang_thai.id_trang_thai = dang_ky_khoa_hoc.trang_thai
    LEFT JOIN khuyen_mai ON khuyen_mai.id_khuyen_mai = dang_ky_khoa_hoc.id_khuyen_mai
    WHERE dang_ky_khoa_hoc.id_khoa_hoc = '$id_khoa_hoc'";
    $results = pdo_query($sql);
    return $results;
}
function dangkykhoahoc($id_tai_khoan, $id_khoa_hoc, $id_giang_vien, $thanh_tien, $ngay_dang_ky_hoc, $trang_thai ,$id_khuyen_mai){
    $sql = "INSERT INTO dang_ky_khoa_hoc(id_tai_khoan, id_khoa_hoc,id_giang_vien, thanh_tien, ngay_dang_ky_hoc,trang_thai ,id_khuyen_mai) VALUES ('$id_tai_khoan', '$id_khoa_hoc','$id_giang_vien', '$thanh_tien', '$ngay_dang_ky_hoc', '$trang_thai' ,'$id_khuyen_mai')";
    pdo_execute($sql);
}
function myskill(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT *,khoa_hoc.avt as avt FROM dang_ky_khoa_hoc
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = dang_ky_khoa_hoc.id_khoa_hoc
    WHERE id_tai_khoan = '$id_tai_khoan'";
    $result = pdo_query($sql);
    return $result;
}
function lockhoahocgiagiamdan(){
    $sql = "SELECT * FROM khoa_hoc ORDER BY tien_hoc DESC";
    $result = pdo_query($sql);
    return $result;
}
function lockhoahocgiatangdan(){
    $sql = "SELECT * FROM khoa_hoc ORDER BY tien_hoc ASC";
    $result = pdo_query($sql);
    return $result;
}
function lockhoahocduoi500(){
    $sql = "SELECT * FROM khoa_hoc WHERE tien_hoc <=500";
    $result = pdo_query($sql);
    return $result;
}
function lockhoahocduoi1500(){
    $sql = "SELECT * FROM khoa_hoc WHERE tien_hoc >500 AND tien_hoc <=1500";
    $result = pdo_query($sql);
    return $result;
}
function lockhoahoctren1500(){
    $sql = "SELECT * FROM khoa_hoc WHERE tien_hoc >1500";
    $result = pdo_query($sql);
    return $result;
}
?>