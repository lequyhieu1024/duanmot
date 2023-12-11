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
                        $email = $_POST['email'];
                        $mat_khau = $_POST['mat_khau'];
                        $id_role = $_POST['id_role'];
                        $xn_mat_khau = $_POST['xn_mat_khau'];
                        $checkRegister = checkRegister($ten_tai_khoan,$email);
                        if($mat_khau === $xn_mat_khau && empty($checkRegister)){
                            register($ten_tai_khoan,$email,$mat_khau,$id_role);
                            echo '<script>
                                    var xacNhan = confirm("Đăng ký thành công. Mời đăng nhập");
                                        if(xacNhan){
                                            window.location.href ="app/views/client/taikhoan/login.php"}
                                    </script>';                              
                        }else{
                            echo '<script>alert("Đăng ký tên người dùng,email đã tồn tại hoặc mật khẩu không khớp")</script>';
                            echo '<script> window.location.href ="app/views/client/taikhoan/register.php"</script>';
                    }
                }
                
                break;
            case 'changepassword':
                if(isset($_POST['changepassword'])){
                    $id_tai_khoan = $_SESSION['id_tai_khoan'];
                    $mat_khau_old = $_POST['mat_khau_old'];
                    $mat_khau_new = $_POST['mat_khau_new'];
                    $xn_mat_khau = $_POST['xn_mat_khau'];
                    $check = checkpassword($id_tai_khoan);
                    if($check['mat_khau'] == $mat_khau_old){
                        if($mat_khau_new == $xn_mat_khau){
                            changepassword($mat_khau_new, $id_tai_khoan);
                            echo '<script>alert("Đổi mật khẩu thành công")</script>';
                        }else{
                            echo '<script>alert("Mật khẩu xác nhận không khớp")</script>';
                            echo '<script> window.location.href ="index.php?redirect=changepassword"</script>';
                        }
                    }else{                       
                            echo '<script>alert("Mật khẩu cũ không chính xác")</script>';
                            echo '<script> window.location.href ="index.php?redirect=changepassword"</script>';
                    }
                }
                include "app/views/Client/taikhoan/changepassword.php";
                break;
            case 'changeMyInfo':
                if(isset($_POST['changemyinfo'])){
                    $id_tai_khoan = $_POST['id_tai_khoan'];
                    $ho_va_ten = $_POST['ho_va_ten'];
                    $email = $_POST['email'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    $nam_sinh = $_POST['nam_sinh'];
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    changeMyInfo($id_tai_khoan,$ho_va_ten,$email,$nam_sinh,$avt,$so_dien_thoai);
                    echo '<script>alert("Cập nhật thành công")</script>';
                    echo '<script> window.location.href ="index.php?redirect=default-settings"</script>';
                }
                include "app/views/Client/taikhoan/changeMyInfo.php";
                break;
            case 'all_kh_theo_dm':
                include("app/views/client/khoahoc/all_kh_theo_dm.php");
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
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $noi_dung_binh_luan = $_POST['noi_dung_binh_luan'];
                    $ngay_binh_luan = $_POST['ngay_binh_luan'];
                    addbinhluan($id_tai_khoan, $id_khoa_hoc, $noi_dung_binh_luan, $ngay_binh_luan);
                    header("Location: index.php?redirect=chitietkhoahoc&id_khoa_hoc=" . $id_khoa_hoc . "&id_danh_muc=" . $id_danh_muc);
                    }else{
                        $id_khoa_hoc = $_POST['id_khoa_hoc'];
                        $id_danh_muc = $_POST['id_danh_muc'];
                        echo '<script>alert("Chưa đăng nhập")</script>';
                        echo '<script>window.location.href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=' . $id_khoa_hoc . '&id_danh_muc=' . $id_danh_muc . '"</script>';
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
            case 'huydangky':
                delete();
                header("location: index.php?redirect=khoahoccuatoi");
                break;
            case 'khoahoccuatoi':
                include("app/views/client/khoahoc/khoahoccuatoi.php");
                break;
            case 'chitietkhcuatoi':
                $id_dang_ky_khoa_hoc = $_GET['id_dang_ky_khoa_hoc'];
                $id_khoa_hoc = $_GET['id_khoa_hoc'];
                include("app/views/client/khoahoc/chitietkhcuatoi.php");
                break;
            case 'thongtinthanhtoan':
                if(isset($_SESSION['id_tai_khoan'])){
                    include("app/views/client/thanhtoan/thongtinthanhtoan.php");
                }else{
                    echo '<script>alert("Vui lòng đăng nhập")</script>';
                    echo '<script>window.location.href="app/views/client/taikhoan/login.php"</script>';
                }
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
            case 'thanhtoan':
                    if(isset($_SESSION['id_tai_khoan'])){
                        $id_tai_khoan = $_POST['id_tai_khoan'];
                        $ho_va_ten = $_POST['ho_va_ten'];
                        $so_dien_thoai = $_POST['so_dien_thoai'];
                        $email = $_POST['email'];
                        $id_khoa_hoc = $_POST['id_khoa_hoc'];
                        $id_giang_vien = $_POST['id_giang_vien'];
                        $thanh_tien = $_POST['thanh_tien'];
                        $ngay_dang_ky_hoc = $_POST['ngay_dang_ky_hoc'];
                        $trang_thai = $_POST['trang_thai'];
                        $id_khuyen_mai = $_POST['khuyen_mai'];
                        $lo_trinh = $_POST['lo_trinh_hoc'];
                        $pttt = $_POST['pttt'];
                        dangkykhoahoc($id_tai_khoan, $id_khoa_hoc, $id_giang_vien, $thanh_tien, $ngay_dang_ky_hoc,$lo_trinh, $trang_thai ,$id_khuyen_mai,$ho_va_ten, $so_dien_thoai, $email,$pttt);
                        echo '<script>alert("Đã đăng ký, chờ xác nhận")</script>';
                        echo '<script>window.location.href="index.php?redirect=khoahoccuatoi"</script>';
                    }else{
                        $id_khoa_hoc = $_POST['id_khoa_hoc'];
                        echo '<script>alert("Vui lòng đăng nhập để đăng ký khóa học")</script>';
                        echo '<script>window.location.href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=' . $id_khoa_hoc . '"</script>';
                    }
                
                break;
                case 'khoahocyeuthich':
                    include("app/views/client/khoahocyeuthich/khoahocyeuthich.php");
                    break;
                case 'yeuthichkhoahoc':
                    $id_khoa_hoc = $_GET['id_khoa_hoc'];
                    $id_danh_muc = $_GET['id_danh_muc'];
                    $id_tai_khoan = $_SESSION['id_tai_khoan'];
                    yeu_thich_khoa_hoc($id_khoa_hoc, $id_tai_khoan);
                    header("location: index.php?redirect=chitietkhoahoc&id_khoa_hoc=$id_khoa_hoc&id_danh_muc=$id_danh_muc");
                    break;
                case 'huyyeuthichkhoahoc':
                    $id_khoa_hoc = $_GET['id_khoa_hoc'];
                    $id_danh_muc = $_GET['id_danh_muc'];
                    $id_tai_khoan = $_SESSION['id_tai_khoan'];
                    huy_yeu_thich_khoa_hoc($id_khoa_hoc, $id_tai_khoan);
                    header("location: index.php?redirect=chitietkhoahoc&id_khoa_hoc=$id_khoa_hoc&id_danh_muc=$id_danh_muc");
                    break;
            default:
                include("app/views/client/layout/home.php");
                break;
        }
    }else{
        include("app/views/client/layout/home.php");
    }
?>