<?php 
function addltkh($id_lo_trinh,$id_khoa_hoc){
    $sql = "INSERT INTO lo_trinh_khoa_hoc (id_lo_trinh,id_khoa_hoc) value ('$id_lo_trinh','$id_khoa_hoc')";
    $ressult = pdo_query($sql);
    return $ressult;
}
function editltkh($id_ltkh,$id_lo_trinh,$id_khoa_hoc){
    $sql = "UPDATE lo_trinh_khoa_hoc SET id_lo_trinh_khoa_hoc = '$id_ltkh',id_lo_trinh=$id_lo_trinh,id_khoa_hoc='$id_khoa_hoc' WHERE id_lo_trinh_khoa_hoc = '$id_ltkh'";
    $ressult = pdo_query($sql);
    return $ressult;
}
function allltkh(){
    $sql = "SELECT *,lo_trinh_khoa_hoc.id_lo_trinh_khoa_hoc as id_ltkh FROM lo_trinh_khoa_hoc
    JOIN lo_trinh_hoc ON lo_trinh_hoc.id_lo_trinh = lo_trinh_khoa_hoc.id_lo_trinh
    JOIN khoa_hoc ON khoa_hoc.id_khoa_hoc = lo_trinh_khoa_hoc.id_khoa_hoc
    ORDER BY khoa_hoc.id_khoa_hoc";
    $ressult = pdo_query($sql);
    return $ressult;
}