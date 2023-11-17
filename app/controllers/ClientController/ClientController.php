<?php 
    if(isset($_GET['redirect'])){
        $redirect = $_GET['redirect'];
        switch ($redirect) {
            case 'login':
                include("app/views/client/taikhoan/login.php");
                    if(isset($_POST["login"])){
                        $ten_tai_khoan = $_POST['ten_tai_khoan'];
                        $mat_khau = $_POST['mat_khau'];
                        login($ten_tai_khoan, $mat_khau);
                        }
                break;
            case 'logout':
                include("app/views/client/taikhoan/logout.php");
                break;
            case 'register':
                include("app/views/client/taikhoan/register.php");
                    if(isset($_POST['register'])){
                        $success = $err= "";
                        $ten_tai_khoan = $_POST['ten_tai_khoan'];
                        $id_tai_khoan = $_POST['id_tai_khoan'];
                        $email = $_POST['email'];
                        $mat_khau = $_POST['mat_khau'];
                        $id_role = $_POST['id_role'];
                        $xn_mat_khau = $_POST['xn_mat_khau'];
                        if($mat_khau === $xn_mat_khau){
                            register($id_tai_khoan,$ten_tai_khoan,$email,$mat_khau,$id_role);
                            echo '<script>alert("Đăng ký thành công")</script>';
                        }else{
                            echo '<script>alert("Đăng ký thất bại")</script>';
                    }
                }
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