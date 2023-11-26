<?php 
    function all_binh_luan() {
        $sql = "SELECT * FROM binh_luan 
            LEFT JOIN tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id_tai_khoan
            LEFT JOIN khoa_hoc ON binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc";
        $result = pdo_query($sql);
        return $result;
    }  
    function all_danh_gia() {
        $sql = "SELECT *,tai_khoan.ten_tai_khoan, khoa_hoc.ten_khoa_hoc FROM danh_gia 
            JOIN tai_khoan ON danh_gia.id_tai_khoan = tai_khoan.id_tai_khoan
            JOIN khoa_hoc ON danh_gia.id_khoa_hoc = khoa_hoc.id_khoa_hoc";
        $result = pdo_query($sql);
        return $result;
    }  
?>