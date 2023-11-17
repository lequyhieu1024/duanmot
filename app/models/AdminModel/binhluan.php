<?php 
    function all_binh_luan() {
        $sql = "SELECT * FROM binh_luan 
        JOIN tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id_tai_khoan
        JOIN khoa_hoc ON  binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc";
        $result = pdo_query($sql);
        return $result;
    }
        
?>