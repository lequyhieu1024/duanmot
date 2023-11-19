<?php 
 updateview();


$ctkh = chitietkhoahoc();
    foreach($ctkh as $khct):
        extract($khct);
        print_r($khct);
    endforeach;

    ?>
<button type="submit">Thanh toán</button>