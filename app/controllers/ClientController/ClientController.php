<?php 
    if(isset($_GET['redirect'])){
        $redirect = $_GET['redirect'];
        switch ($redirect) {
            case 'login':
                include("app/views/client/taikhoan/login.php");
                break;

            }
    }else{
        include("app/views/client/layout/home.php");
    }
?>