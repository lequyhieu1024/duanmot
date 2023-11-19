<?php 
$gv = chitietgiangvien();
foreach($gv as $info):
    extract($info);
    print_r($info);
    endforeach?>