<?php 
    $km = select_all_table();
    foreach($km as $ctkm):
        extract($ctkm);
        echo "<pre>";
        print_r($ctkm);
        echo "</pre>";
        endforeach?>