<?php
function khuyen_mai(){ 
    $now = date("Y-m-d H:i:s");
    $sql = "SELECT * FROM khuyen_mai WHERE ngay_ket_thuc > '$now'";
    $result = pdo_query($sql);
    return $result;
}