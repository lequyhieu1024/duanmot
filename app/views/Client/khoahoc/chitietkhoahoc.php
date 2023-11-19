<?php 
$ctkh = chitietkhoahoc();
    foreach($ctkh as $khct):
        extract($khct);
        print_r($khct);
    endforeach;