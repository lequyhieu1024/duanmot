<?php
$tt = ttngguoilh();
foreach($tt as $row):
    extract($row);
    echo '<pre>';
    print_r($row);
    echo '</pre>';
endforeach;

?>