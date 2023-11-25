<?php 
    function all_lien_he() {
        $sql = "SELECT * FROM lien_he JOIN tai_khoan ON lien_he.id_tai_khoan = tai_khoan.id_tai_khoan";
        $result = pdo_query($sql);
        return $result;
    }
    function ttngguoilh() {
        $id_lien_he = $_GET['id_lien_he'];
        $sql = "SELECT * FROM lien_he JOIN tai_khoan ON lien_he.id_tai_khoan = tai_khoan.id_tai_khoan
        WHERE id_lien_he = '$id_lien_he'";
        $result = pdo_query($sql);
        return $result;
    }
?>

