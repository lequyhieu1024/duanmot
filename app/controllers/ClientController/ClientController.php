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
                        $email = $_POST['email'];
                        $mat_khau = $_POST['mat_khau'];
                        $id_role = $_POST['id_role'];
                        $xn_mat_khau = $_POST['xn_mat_khau'];
                        if($mat_khau === $xn_mat_khau){
                            register($ten_tai_khoan,$email,$mat_khau,$id_role);
                            echo '<script>
                                    var xacNhan = confirm("Đăng ký thành công. Mời đăng nhập");
                                        if(xacNhan){
                                            window.location.href ="app/views/client/taikhoan/login.php"}
                                    </script>';                              
                        }else{
                            echo '<script>alert("Đăng ký thất bại")</script>';
                            echo '<script> window.location.href ="app/views/client/taikhoan/register.php"</script>';
                    }
                }
                break;
            case 'lienhe':
                    include("app/views/client/chucnangphu/lienhe.php");
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
            case 'addbinhluan':
                if(isset($_POST['addbinhluan'])){
                    if(isset($_SESSION['ten_tai_khoan'])){
                    $id_tai_khoan = $_SESSION['id_tai_khoan'];
                    $id_khoa_hoc = $_POST['id_khoa_hoc'];
                    $noi_dung_binh_luan = $_POST['noi_dung_binh_luan'];
                    $ngay_binh_luan = $_POST['ngay_binh_luan'];
                    addbinhluan($id_tai_khoan, $id_khoa_hoc, $noi_dung_binh_luan, $ngay_binh_luan);
                        header("location: index.php?redirect=chitietkhoahoc&id_khoa_hoc=".$id_khoa_hoc);
                    }else{
                        echo '<script>alert("Chưa đăng nhập")</script>';
                        echo '<script>window.location.href="index.php?redirect=chitietkhoahoc&id_khoa_hoc='.$id_khoa_hoc.'"</script>';
                    }
                }
                break;
                case 'adddanhgia':
                    if(isset($_POST['adddanhgia'])){
                        if(isset($_SESSION['id_tai_khoan'])){
                            $id_tai_khoan = $_SESSION['id_tai_khoan'];
                            $id_khoa_hoc = $_POST['id_khoa_hoc'];
                            $danh_gia = $_POST['danh_gia'];
                            if ($danh_gia >=1 && $danh_gia <=5) {
                                adddanhgia($id_tai_khoan,$id_khoa_hoc,$danh_gia);
                                echo '<script>alert("Đánh giá thành công")</script>';
                                echo '<script>window.location.href="index.php?redirect=khoahoccuatoi"</script>';
                            } else {
                                echo '<script>alert("vui lòng đánh giá")</script>';
                                echo '<script>window.location.href="index.php?redirect=chitietkhcuatoi&id_khoa_hoc='.$id_khoa_hoc.'"</script>';
                                }
                            }else{
                                echo '<script>alert("Chưa đăng nhập")</script>';
                                echo '<script>window.location.href="index.php?redirect=chitietkhcuatoi&id_khoa_hoc='.$id_khoa_hoc.'"</script>';
                            }
                        }
                    break;
            case 'timkiem':
                include("app/views/client/khoahoc/kh_theo_timkiem.php");
                break;
            // case 'dangkykhoahoc':
            //     if(isset($_POST['dangkykhoahoc'])){
            //         if(isset($_SESSION['id_tai_khoan'])){
            //             $id_tai_khoan = $_POST['id_tai_khoan'];
            //             $id_khoa_hoc = $_POST['id_khoa_hoc'];
            //             $id_giang_vien = $_POST['id_giang_vien'];
            //             $thanh_tien = $_POST['thanh_tien'];
            //             $ngay_dang_ky_hoc = $_POST['ngay_dang_ky_hoc'];
            //             $trang_thai = $_POST['trang_thai'];
            //             $id_khuyen_mai = $_POST['id_khuyen_mai'];
            //             dangkykhoahoc($id_tai_khoan, $id_khoa_hoc, $id_giang_vien, $thanh_tien, $ngay_dang_ky_hoc, $trang_thai ,$id_khuyen_mai);
            //             header("location: index.php?redirect=khoahoccuatoi");
            //         }else{
            //             $id_khoa_hoc = $_POST['id_khoa_hoc'];
            //             echo '<script>alert("Vui lòng đăng nhập để đăng ký khóa học")</script>';
            //             echo '<script>window.location.href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=' . $id_khoa_hoc . '"</script>';
            //         }
            //     }
            //     break;
            case 'huydangky':
                delete();
                header("location: index.php?redirect=khoahoccuatoi");
                break;
            case 'khoahoccuatoi':
                include("app/views/client/khoahoc/khoahoccuatoi.php");
                break;
            case 'chitietkhcuatoi':
                if(isset($_GET['id_khoa_hoc'])){
                    $id_khoa_hoc = $_GET['id_khoa_hoc'];
                    chitietkhcuatoi($id_khoa_hoc);
                }
                include("app/views/client/khoahoc/chitietkhcuatoi.php");
                break;
            case 'thanhtoan':
                include("app/views/client/thanhtoan/thanhtoan.php");
                break;
            case 'mycontact':
                include("app/views/client/chucnangphu/mycontact.php");
                break;
            case 'myinfo':
                include("app/views/client/taikhoan/myinfo.php");
                break;
            case 'lockhoahoc':
                if(isset($_POST['loc'])){
                    $value = $_POST['lockhoahoc'];
                    include("app/views/client/khoahoc/lockhoahoc.php");
                }
                break;
            case 'default-settings':
                include("app/views/client/chucnangphu/default-settings.php");
                break;
            default:
                include("app/views/client/layout/home.php");
                break;
        }
    }else{
        include("app/views/client/layout/home.php");
    }
?>