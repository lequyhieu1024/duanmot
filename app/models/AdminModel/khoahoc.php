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
function addkhoahoc($id_khoa_hoc,$ten_khoa_hoc,$avt,$tien_hoc,$mo_ta,$lo_trinh_hoc,$trang_thai,$id_giang_vien,$id_danh_muc,$slideshow) {
        $sql = "INSERT INTO khoa_hoc(id_khoa_hoc,ten_khoa_hoc, avt, tien_hoc, mo_ta,lo_trinh_hoc ,trang_thai, id_giang_vien, id_danh_muc, slideshow) VALUES ('$id_khoa_hoc','$ten_khoa_hoc','$avt','$tien_hoc','$mo_ta','$lo_trinh_hoc','$trang_thai','$id_giang_vien','$id_danh_muc','$slideshow')";
        pdo_execute($sql); 
}
function editkhoahoc($id_khoa_hoc,$ten_khoa_hoc,$avt,$tien_hoc,$mo_ta,$lo_trinh_hoc,$trang_thai,$id_giang_vien,$id_danh_muc,$slideshow){
    $sql = "UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc', id_khoa_hoc='$id_khoa_hoc', avt='$avt', tien_hoc='$tien_hoc', mo_ta='$mo_ta',lo_trinh_hoc='$lo_trinh_hoc', trang_thai='$trang_thai', id_giang_vien='$id_giang_vien', id_danh_muc='$id_danh_muc', slideshow='$slideshow' WHERE id_khoa_hoc ='$id_khoa_hoc'";
    pdo_execute($sql);
}
?>