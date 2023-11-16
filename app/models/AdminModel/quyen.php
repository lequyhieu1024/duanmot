<?php 
function role(){
    $sql = "SELECT * FROM role";
        $result = pdo_query($sql);
        return $result;
}
?>