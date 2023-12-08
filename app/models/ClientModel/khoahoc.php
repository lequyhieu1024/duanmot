<?php 
function thongtinkhoahoc(){
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql ="SELECT * FROM khoa_hoc WHERE id_khoa_hoc = $id_khoa_hoc";
    $result = pdo_query($sql);
    return $result;
}
function kh_theo_dm(){
    if(isset($_GET['id_danh_muc'])){
        $id_danh_muc = $_GET['id_danh_muc'];
        $sql = "SELECT * FROM khoa_hoc WHERE id_danh_muc = '$id_danh_muc' and slideshow = 'show'";
        $result = pdo_query($sql);
        return $result;
    }
}
function khoahoc() {
    $sql = "SELECT *,khoa_hoc.id_khoa_hoc,khoa_hoc.mo_ta, khoa_hoc.trang_thai,giang_vien.ma_giang_vien,khoa_hoc.avt, avg(danh_gia.danh_gia) as avg_rate
    FROM khoa_hoc
    JOIN danh_muc_khoa_hoc ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc
    LEFT JOIN binh_luan ON binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    LEFT JOIN danh_gia ON danh_gia.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    JOIN giang_vien ON giang_vien.id_giang_vien = khoa_hoc.id_giang_vien
    WHERE khoa_hoc.slideshow = 'show' GROUP BY khoa_hoc.id_khoa_hoc DESC";
    $result = pdo_query($sql);
    return $result;
}
function khoahocdanhgiatot() {
    $sql = "SELECT *, khoa_hoc.id_khoa_hoc, khoa_hoc.mo_ta, khoa_hoc.trang_thai, giang_vien.ma_giang_vien, khoa_hoc.avt, avg(danh_gia.danh_gia) as avg_rate
    FROM khoa_hoc
    JOIN danh_muc_khoa_hoc ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc
    LEFT JOIN binh_luan ON binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    LEFT JOIN danh_gia ON danh_gia.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    JOIN giang_vien ON giang_vien.id_giang_vien = khoa_hoc.id_giang_vien
    WHERE khoa_hoc.slideshow = 'show'
    GROUP BY khoa_hoc.id_khoa_hoc
    HAVING avg_rate > 4.0
    ORDER BY avg_rate DESC";
    $result = pdo_query($sql);
    return $result;
}

function khoahocnhieuluotxem () {
    $sql ="SELECT * FROM khoa_hoc WHERE slideshow = 'show' ORDER BY so_luot_xem DESC";
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
    $sql = "SELECT khoa_hoc.*, khoa_hoc.avt as avt_kh, giang_vien.avt as avt_gv,giang_vien.ma_giang_vien ,giang_vien.ten_giang_vien , giang_vien.mo_ta as mota_gv,khoa_hoc.trang_thai, danh_muc_khoa_hoc.ten_danh_muc, avg(danh_gia.danh_gia) as danh_gia
        FROM khoa_hoc
        JOIN danh_muc_khoa_hoc ON danh_muc_khoa_hoc.id_danh_muc = khoa_hoc.id_danh_muc 
        JOIN giang_vien ON khoa_hoc.id_giang_vien = giang_vien.id_giang_vien
        LEFT JOIN binh_luan ON khoa_hoc.id_khoa_hoc = binh_luan.id_khoa_hoc
        LEFT JOIN danh_gia ON khoa_hoc.id_khoa_hoc = danh_gia.id_khoa_hoc
        WHERE khoa_hoc.id_khoa_hoc = '$id_khoa_hoc'";
    $result = pdo_query($sql);
    return $result;
}
function dem_kh_cua_toi(){
    if(isset($_SESSION['id_tai_khoan'])){
    $id_tai_khoan = $_SESSION['id_tai_khoan']; 
    $sql = "SELECT count(*) as so_luong FROM dang_ky_khoa_hoc WHERE id_tai_khoan = '$id_tai_khoan'";
    $rows =pdo_query_one($sql);
    $so_luong = $rows['so_luong'];
    return $so_luong;
}
}
function khoahoccuatoi(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT dang_ky_khoa_hoc.pttt,dang_ky_khoa_hoc.lo_trinh,trang_thai.id_trang_thai as id_trang_thai_kh, dang_ky_khoa_hoc.trang_thai,khoa_hoc.id_khoa_hoc,id_dang_ky_khoa_hoc, khoa_hoc.avt as avt_kh,trang_thai.ten_trang_thai, khoa_hoc.ten_khoa_hoc,giang_vien.ma_giang_vien,
    dang_ky_khoa_hoc.thanh_tien
    FROM dang_ky_khoa_hoc
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = dang_ky_khoa_hoc.id_khoa_hoc
    JOIN tai_khoan ON tai_khoan.id_tai_khoan = dang_ky_khoa_hoc.id_tai_khoan
    JOIN trang_thai ON trang_thai.id_trang_thai = dang_ky_khoa_hoc.trang_thai
    JOIN giang_vien ON giang_vien.id_giang_vien = dang_ky_khoa_hoc.id_giang_vien
    LEFT JOIN khuyen_mai ON khuyen_mai.id_khuyen_mai = dang_ky_khoa_hoc.id_khuyen_mai
    WHERE dang_ky_khoa_hoc.id_tai_khoan = '$id_tai_khoan'
    ORDER BY trang_thai.id_trang_thai ASC,dang_ky_khoa_hoc.id_dang_ky_khoa_hoc DESC";
    $results = pdo_query($sql);
    return $results;
}
function chitietkhcuatoi($id_khoa_hoc,$id_dang_ky_khoa_hoc){
    $sql = "SELECT pttt,dang_ky_khoa_hoc.lo_trinh,dang_ky_khoa_hoc.id_dang_ky_khoa_hoc,dang_ky_khoa_hoc.trang_thai,khoa_hoc.id_khoa_hoc, khoa_hoc.avt as avt_kh,trang_thai.ten_trang_thai,trang_thai.id_trang_thai, khoa_hoc.ten_khoa_hoc,giang_vien.ma_giang_vien,
    khoa_hoc.tien_hoc,thanh_tien
    FROM dang_ky_khoa_hoc
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = dang_ky_khoa_hoc.id_khoa_hoc
    JOIN tai_khoan ON tai_khoan.id_tai_khoan = dang_ky_khoa_hoc.id_tai_khoan
    JOIN giang_vien ON giang_vien.id_giang_vien = dang_ky_khoa_hoc.id_giang_vien
    JOIN trang_thai ON trang_thai.id_trang_thai = dang_ky_khoa_hoc.trang_thai
    LEFT JOIN khuyen_mai ON khuyen_mai.id_khuyen_mai = dang_ky_khoa_hoc.id_khuyen_mai
    WHERE dang_ky_khoa_hoc.id_khoa_hoc = '$id_khoa_hoc' AND id_dang_ky_khoa_hoc = $id_dang_ky_khoa_hoc";
    $results = pdo_query($sql);
    return $results;
}
function dangkykhoahoc($id_tai_khoan, $id_khoa_hoc, $id_giang_vien, $thanh_tien, $ngay_dang_ky_hoc,$lo_trinh, $trang_thai ,$id_khuyen_mai,$ho_va_ten, $so_dien_thoai, $email,$pttt){
    $sql = "INSERT INTO dang_ky_khoa_hoc(id_tai_khoan, id_khoa_hoc,id_giang_vien, thanh_tien, ngay_dang_ky_hoc,lo_trinh ,trang_thai ,id_khuyen_mai,ho_va_ten, so_dien_thoai, email, pttt) VALUES ('$id_tai_khoan', '$id_khoa_hoc','$id_giang_vien', '$thanh_tien', '$ngay_dang_ky_hoc','$lo_trinh', '$trang_thai' ,'$id_khuyen_mai','$ho_va_ten', '$so_dien_thoai', '$email','$pttt')";
    pdo_execute($sql);
}
function myskill(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT *,khoa_hoc.avt as avt FROM dang_ky_khoa_hoc
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = dang_ky_khoa_hoc.id_khoa_hoc
    WHERE id_tai_khoan = '$id_tai_khoan' AND dang_ky_khoa_hoc.trang_thai = 3";
    $result = pdo_query($sql);
    return $result;
}
function khoahoclienquan(){
    $id_danh_muc = $_GET['id_danh_muc'];
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "SELECT *,khoa_hoc.avt as avt_kh FROM khoa_hoc JOIN danh_muc_khoa_hoc 
    ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc
    WHERE khoa_hoc.id_danh_muc = $id_danh_muc AND id_khoa_hoc != $id_khoa_hoc";
    $result = pdo_query($sql);
    return $result;
}
function yeu_thich_khoa_hoc($id_khoa_hoc,$id_tai_khoan){
    $sql = "INSERT INTO khoa_hoc_yeu_thich(id_khoa_hoc,id_tai_khoan) VALUE('$id_khoa_hoc','$id_tai_khoan')";
    pdo_execute($sql);
}
function huy_yeu_thich_khoa_hoc($id_khoa_hoc,$id_tai_khoan){
    $sql = "DELETE FROM khoa_hoc_yeu_thich WHERE id_tai_khoan = $id_tai_khoan AND id_khoa_hoc=$id_khoa_hoc";
    pdo_execute($sql);
}
function dem_luot_yeu_thich_khoa_hoc(){
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "SELECT COUNT(id_khoa_hoc_yeu_thich) as so_luot_yeu_thich FROM khoa_hoc_yeu_thich
        JOIN khoa_hoc ON khoa_hoc_yeu_thich.id_khoa_hoc = khoa_hoc.id_khoa_hoc
        WHERE khoa_hoc.id_khoa_hoc = $id_khoa_hoc";
    $rows =pdo_query_one($sql);
    $so_luot_yeu_thich = $rows['so_luot_yeu_thich'];
    return $so_luot_yeu_thich;
}
function khoaHocYeuThichCuaToi(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT * FROM khoa_hoc_yeu_thich
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = khoa_hoc_yeu_thich.id_khoa_hoc
    WHERE id_tai_khoan = $id_tai_khoan
    ORDER BY khoa_hoc_yeu_thich.id_khoa_hoc_yeu_thich DESC";
    $result = pdo_query($sql);
    return $result;
}
function checkYeuThich(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "SELECT * FROM khoa_hoc_yeu_thich
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = khoa_hoc_yeu_thich.id_khoa_hoc
    WHERE id_tai_khoan = $id_tai_khoan AND khoa_hoc_yeu_thich.id_khoa_hoc = $id_khoa_hoc";
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
    $sql = "SELECT * FROM khoa_hoc WHERE tien_hoc <=500000";
    $result = pdo_query($sql);
    return $result;
}
function lockhoahocduoi1500(){
    $sql = "SELECT * FROM khoa_hoc WHERE tien_hoc >500000 AND tien_hoc <=1000000";
    $result = pdo_query($sql);
    return $result;
}
function lockhoahoctren1500(){
    $sql = "SELECT * FROM khoa_hoc WHERE tien_hoc >1000000";
    $result = pdo_query($sql);
    return $result;
}
function lo_trinh_khoa_hoc($id_khoa_hoc){
    $sql = "SELECT * FROM lo_trinh_khoa_hoc
    join lo_trinh_hoc ON lo_trinh_hoc.id_lo_trinh = lo_trinh_khoa_hoc.id_lo_trinh
    WHERE lo_trinh_khoa_hoc.id_khoa_hoc = $id_khoa_hoc";
    $result = pdo_query($sql);
    return $result;
}
?>