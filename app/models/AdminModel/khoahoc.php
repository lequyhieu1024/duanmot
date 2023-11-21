<?php 
function khoahoc() {
    $sql = "SELECT *,khoa_hoc.id_khoa_hoc,khoa_hoc.mo_ta, khoa_hoc.trang_thai,giang_vien.ma_giang_vien,khoa_hoc.avt, avg(binh_luan.danh_gia) as avg_rate
    FROM khoa_hoc
    JOIN danh_muc_khoa_hoc ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc
    LEFT JOIN binh_luan ON binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    JOIN giang_vien ON giang_vien.id_giang_vien = khoa_hoc.id_giang_vien GROUP BY khoa_hoc.id_khoa_hoc";
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
function addkhoahoc($id_khoa_hoc,$ten_khoa_hoc,$avt,$tien_hoc,$mo_ta,$lo_trinh_hoc,$trang_thai,$id_giang_vien,$id_danh_muc,$slideshow) {
        $sql = "INSERT INTO khoa_hoc(id_khoa_hoc,ten_khoa_hoc, avt, tien_hoc, mo_ta,lo_trinh_hoc ,trang_thai, id_giang_vien, id_danh_muc, slideshow) VALUES ('$id_khoa_hoc','$ten_khoa_hoc','$avt','$tien_hoc','$mo_ta','$lo_trinh_hoc','$trang_thai','$id_giang_vien','$id_danh_muc','$slideshow')";
        pdo_execute($sql); 
}
function editkhoahoc($id_khoa_hoc,$ten_khoa_hoc,$avt,$tien_hoc,$mo_ta,$lo_trinh_hoc,$trang_thai,$id_giang_vien,$id_danh_muc,$slideshow){
    if ($avt!="") {
        $sql = "UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc', id_khoa_hoc='$id_khoa_hoc', avt='$avt', tien_hoc='$tien_hoc', mo_ta='$mo_ta',lo_trinh_hoc='$lo_trinh_hoc', trang_thai='$trang_thai', id_giang_vien='$id_giang_vien', id_danh_muc='$id_danh_muc', slideshow='$slideshow' WHERE id_khoa_hoc ='$id_khoa_hoc'";
    }else {
        $sql = "UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc', id_khoa_hoc='$id_khoa_hoc', tien_hoc='$tien_hoc', mo_ta='$mo_ta',lo_trinh_hoc='$lo_trinh_hoc', trang_thai='$trang_thai', id_giang_vien='$id_giang_vien', id_danh_muc='$id_danh_muc', slideshow='$slideshow' WHERE id_khoa_hoc ='$id_khoa_hoc'";
    }
    pdo_execute($sql);
}
function QLkhdadangky(){
    $sql = "SELECT *,dang_ky_khoa_hoc.id_khoa_hoc,khoa_hoc.ten_khoa_hoc,khoa_hoc.avt, dang_ky_khoa_hoc.trang_thai,giang_vien.ma_giang_vien ,khuyen_mai.ten_khuyen_mai
    FROM dang_ky_khoa_hoc
    JOIN tai_khoan ON tai_khoan.id_tai_khoan = dang_ky_khoa_hoc.id_tai_khoan
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = dang_ky_khoa_hoc.id_khoa_hoc
    LEFT JOIN khuyen_mai ON khuyen_mai.id_khuyen_mai = dang_ky_khoa_hoc.id_khuyen_mai
    JOIN giang_vien ON giang_vien.id_giang_vien = dang_ky_khoa_hoc.id_giang_vien";
    $result = pdo_query($sql);
    return $result;
}
?>