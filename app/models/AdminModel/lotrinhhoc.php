<?php 
function addlotrinh($thoi_gian){
    $sql = "INSERT INTO lo_trinh_hoc (thoi_gian) value ('$thoi_gian')";
    $ressult = pdo_query($sql);
    return $ressult;
}
function editlotrinh($id_lo_trinh,$thoi_gian){
    $sql = "UPDATE lo_trinh_hoc SET thoi_gian='$thoi_gian' WHERE id_lo_trinh = '$id_lo_trinh'";
    $ressult = pdo_query($sql);
    return $ressult;
}
function alllotrinh(){
    $sql = "SELECT * FROM lo_trinh_hoc";
    $ressult = pdo_query($sql);
    return $ressult;
}