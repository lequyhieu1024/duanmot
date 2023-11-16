<?php 
function adddanhmuc($ten_danh_muc,$trang_thai,$mo_ta) {
    if(isset($_POST['themdanhmuc'])){
        $trang_thai = $_POST['trang_thai'];
        $mo_ta = $_POST['mo_ta'];
        $ten_danh_muc = $_POST['ten_danh_muc'];
        $sql = "INSERT INTO danh_muc_khoa_hoc(ten_danh_muc,trang_thai,mo_ta) VALUES ('$ten_danh_muc','$trang_thai','$mo_ta')";
        pdo_execute($sql);
        header("location:index.php?act=alldanhmuc&table=danh_muc_khoa_hoc");
    }
}
?>