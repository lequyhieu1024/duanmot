<?php 
function lotrinh(){
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "SELECT lo_trinh_hoc.thoi_gian,lo_trinh_hoc.id_lo_trinh
    FROM lo_trinh_khoa_hoc
    JOIN lo_trinh_hoc ON lo_trinh_hoc.id_lo_trinh = lo_trinh_khoa_hoc.id_lo_trinh
    WHERE lo_trinh_khoa_hoc.id_khoa_hoc = $id_khoa_hoc";
    $result = pdo_query($sql);
    return $result;
}
