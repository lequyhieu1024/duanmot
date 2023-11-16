<?php 
$loadallsp = danh_muc();
foreach ($loadallsp as $key => $value)
extract($value);
print_r($loadallsp);
?>