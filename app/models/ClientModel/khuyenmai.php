<?php
function khuyen_mai(){ 
$sql = "SELECT * FROM khuyen_mai";
$result = pdo_query($sql);
return $result;
}