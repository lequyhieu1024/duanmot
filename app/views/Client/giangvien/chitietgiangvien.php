<?php 
$gv = giang_vien();
foreach($gv as $info):
    extract($info);
    print_r($info);
    endforeach?>