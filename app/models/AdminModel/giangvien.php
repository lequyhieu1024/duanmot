<?php 
function giang_vien() {
    $sql = "SELECT * FROM giang_vien";
    $result = pdo_query($sql);
    return $result;
}
?>