<?php 
function top_5_giang_vien() {
    $sql = "SELECT * FROM giang_vien order by id_giang_vien DESC LIMIT 5";
    $result = pdo_query($sql);
    return $result;
}