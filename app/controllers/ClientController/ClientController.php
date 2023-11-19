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
            case 'all_kh_theo_dm':
                include("app/views/client/khoahoc/all_kh_theo_dm.php");
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
                            echo '<script>
                                    var xacNhan = confirm("Đăng ký thành công. Mời đăng nhập");
                                        if(xacNhan){
                                            window.location.href ="index.php?redirect=login"}
                                    </script>';                              
                        }else{
                            echo '<script>alert("Đăng ký thất bại")</script>';
                    }
                }
                break;
            case 'lienhe':
                    include("app/views/client/lienhe.php");
                    if(empty($_SESSION['ten_tai_khoan'])){
                        if(isset($_POST["sendmesage"])){
                        $noi_dung = $_POST['noi_dung'];
                        $id_tai_khoan = $_POST['id_tai_khoan'];
                        $ngay_lien_he = $_POST['ngay_lien_he'];
                        $trang_thai = $_POST['trang_thai'];
                        lienhe($noi_dung, $ngay_lien_he,$id_tai_khoan,$trang_thai);
                        echo '<script>alert("Liên hệ thành công, chờ phản hồi")</script>';
                    }else{
                        echo '<script>alert("Hãy đăng nhập để gửi liên hệ")
                        window.location.href = "index.php"
                        </script>';
                    }
                }
                break;
            case 'chitietgiangvien':
                include("app/views/client/giangvien/chitietgiangvien.php");
                break;
            case 'allkhuyenmai':
                include('app/views/Client/khuyenmai/allkhuyenmai.php');
                break;
            case 'chitietkhoahoc':
                include('app/views/Client/khoahoc/chitietkhoahoc.php');
                break;
            case 'default-settings':
                include('app/views/Client/display/default-settings.html');
                break;
            case 'about':
                include('app/views/Client/display/about.html');
                break;
            case 'accout-ifomation':
                include('app/views/Client/display/accout-ifomation.html');
                break;
            case 'author-profile':
                include('app/views/Client/display/author-profile.html');
                break;
            case 'blog':
                include('app/views/Client/display/blog.html');
                break;
            case 'blog-sidebar':
                include('app/views/Client/display/blog-sidebar.html');
                break;
            case 'blog-single':
                include('app/views/Client/display/blog-single.html');
                break;
            case 'cart':
                include('app/views/Client/display/cart.html');
                break;
            case 'coming-soon':
                include('app/views/Client/display/coming-soon.html');
                break;
            case 'component':
                include('app/views/Client/display/component.html');
             break;
            case 'contact':
                include('app/views/Client/display/contact.html');
                break;
            case 'contact-information':
                include('app/views/Client/display/contact-information.html');
                break;
            case 'contact-two':
                include('app/views/Client/display/contact-two.html');
                break;
            case 'cource-details':
                include('app/views/Client/display/cource-details.html');
                break;
            case 'course-details-2':
                include('app/views/Client/display/course-details-2.html');
                break;
            case 'courses-grid-1':
                include('app/views/Client/display/courses-grid-1.html');
                break;
            case 'courses-grid-2':
                include('app/views/Client/display/courses-grid-2.html');
                break;
            case 'courses-grid-3':
                include('app/views/Client/display/courses-grid-3.html');
                break;
            case 'chat':
                include('app/views/Client/display/chat.html');
                break;
            case 'checkout':
                include('app/views/Client/display/checkout.html');
                break;
                
            case 'default-analystics':
                include('app/views/Client/display/default-analystics.html');
                break;
            case 'default-author-profile':
                include('app/views/Client/display/default-author-profile.html');
                break;
            case 'default-categories':
                include('app/views/Client/display/default-categories.html');
                break;
            case 'default-course-details':
                include('app/views/Client/display/default-course-details.html');
                break;
        }
    }else{
        include("app/views/client/layout/home.php");
    }
?>