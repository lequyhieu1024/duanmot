<?php 
    $km = select_all_table();
    foreach($km as $ctkm):
        extract($ctkm);
        print_r($ctkm);
        endforeach?>