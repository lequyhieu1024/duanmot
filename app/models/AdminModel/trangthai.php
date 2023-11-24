<?php 
function trang_thai(){
 $sql = "SELECT * FROM trang_thai";
 $result = pdo_query($sql);
 return $result;
}
?>