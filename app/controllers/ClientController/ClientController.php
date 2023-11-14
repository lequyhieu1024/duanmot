<?php 
    if(isset($_GET['redirect'])){
        $redirect = $_GET['redirect'];
        switch ($redirect) {
            case 'login':
                include("app/views/client/taikhoan/login.php");
                break;
            case 'logout':
                include("app/views/client/taikhoan/logout.php");
                break;
            case 'register':
                include("app/views/client/taikhoan/register.php");
                break;
            case 'lienhe':
                include("app/views/client/taikhoan/lienhe.php");
                break;
            case 'unsetcookie':
                include("app/views/client/taikhoan/fogotcookie.php");
                break;
            }
    }else{
        include("app/views/client/layout/home.php");
    }
?>