<?php 
    if(isset($_GET["act"])){
        $act = $_GET['act'];
        switch ($act) {
            case 'alldanhmuc':
                include('../../views/admin/danhmuc/alldanhmuc.php');
                break;
            case 'adddanhmuc':
                include('../../views/admin/danhmuc/adddanhmuc.php');
                if(isset($_POST['adddanhmuc'])){
                    if(isset($_POST['adddanhmuc'])){
                        $trang_thai = $_POST['trang_thai'];
                        $mo_ta = $_POST['mo_ta'];
                        $ten_danh_muc = $_POST['ten_danh_muc'];
                        adddanhmuc($ten_danh_muc,$mo_ta,$trang_thai);
                        header("location:index.php?act=alldanhmuc&table=danh_muc_khoa_hoc");
                }
            }           
                break;
            case 'editdanhmuc':
                include('../../views/admin/danhmuc/editdanhmuc.php');
                if (isset($_POST["editdanhmuc"])) {
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $trang_thai = $_POST['trang_thai'];
                    $mo_ta = $_POST['mo_ta'];
                    $ten_danh_muc = $_POST['ten_danh_muc'];
                    editdanhmuc($id_danh_muc,$ten_danh_muc,$mo_ta,$trang_thai);
                    header("location:index.php?act=alldanhmuc&table=danh_muc_khoa_hoc");
                }
                break;
            case 'allkhoahoc':
                include('../../views/admin/khoahoc/allkhoahoc.php');
                break;
            case 'khtheodm':
                include('../../views/admin/khoahoc/khtheodm.php');
                break;
            case 'addkhoahoc':
                include('../../views/admin/khoahoc/addkhoahoc.php');
                if (isset($_POST["addkhoahoc"])) {
                    $trang_thai = $_POST['trang_thai'];
                    $mo_ta = $_POST['mo_ta'];
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    $lo_trinh_hoc = $_POST['lo_trinh_hoc'];
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    $tien_hoc = $_POST['tien_hoc'];
                    $id_giang_vien = $_POST['id_giang_vien'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $slideshow = $_POST['slideshow'];
                    addkhoahoc($id_khoa_hoc,$ten_khoa_hoc,$avt,$tien_hoc,$mo_ta,$lo_trinh_hoc,$trang_thai,$id_giang_vien,$id_danh_muc,$slideshow);
                    header("location:index.php?act=allkhoahoc&table=khoa_hoc");
                }
                break;
            case 'editkhoahoc':
                include('../../views/admin/khoahoc/editkhoahoc.php');
                if (isset($_POST["editkhoahoc"])) {
                    $trang_thai = $_POST['trang_thai'];
                    $id_khoa_hoc = $_POST['id_khoa_hoc'];
                    $mo_ta = $_POST['mo_ta'];
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    $tien_hoc = $_POST['tien_hoc'];
                    $id_giang_vien = $_POST['id_giang_vien'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $slideshow = $_POST['slideshow'];
                    editkhoahoc($id_khoa_hoc,$ten_khoa_hoc,$avt,$tien_hoc,$mo_ta,$lo_trinh_hoc,$trang_thai,$id_giang_vien,$id_danh_muc,$slideshow);
                    header("location:index.php?act=allkhoahoc&table=khoa_hoc");
                }
                break;
            case 'allgiangvien':
                include('../../views/admin/giangvien/allgiangvien.php');
                break;
            case 'addgiangvien':
                include('../../views/admin/giangvien/addgiangvien.php');
                if (isset($_POST["addgiangvien"])) {
                    $ma_giang_vien = $_POST['ma_giang_vien'];
                    $ten_giang_vien = $_POST['ten_giang_vien'];
                    $email = $_POST['email'];
                    $nam_sinh = $_POST['nam_sinh'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    $mo_ta = $_POST['mo_ta'];
                    addgiangvien($id_giang_vien,$ma_giang_vien,$ten_giang_vien,$email,$avt,$so_dien_thoai,$mo_ta,$nam_sinh);
                    header("location:index.php?act=allgiangvien&table=giang_vien");
                }
                break;
            case 'editgiangvien':
                include('../../views/admin/giangvien/editgiangvien.php');
                if (isset($_POST["editgiangvien"])) {
                    $id_giang_vien = $_POST['id_giang_vien'];
                    $ma_giang_vien = $_POST['ma_giang_vien'];
                    $ten_giang_vien = $_POST['ten_giang_vien'];
                    $email = $_POST['email'];
                    $nam_sinh = $_POST['nam_sinh'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    $mo_ta = $_POST['mo_ta'];
                    editgiangvien($id_giang_vien,$ma_giang_vien,$ten_giang_vien,$email,$avt,$so_dien_thoai,$mo_ta,$nam_sinh);
                    header("location:index.php?act=allgiangvien&table=giang_vien");
                }
                break;
            case 'allbinhluan':
                include('../../views/admin/binhluan/allbinhluan.php');
                break;
            case 'addrole':
                include('../../views/admin/quyennguoitruycap/addrole.php');
                if (isset($_POST["addrole"])) {
                    $name_role = $_POST['name_role'];
                    $mo_ta = $_POST['mo_ta'];
                    addrole($id_role,$name_role,$mo_ta);
                    header("location:index.php?act=allrole&table=role");
                }
                break;
            case 'allrole':
                include('../../views/admin/quyennguoitruycap/allrole.php');
                break;
            case 'editrole':
                include('../../views/admin/quyennguoitruycap/editrole.php');
                if (isset($_POST["editrole"])) {
                    $id_role=$_POST['id_role'];
                    $name_role = $_POST['name_role'];
                    $mo_ta = $_POST['mo_ta'];
                    editrole($id_role,$name_role,$mo_ta);
                    header("location:index.php?act=allrole&table=role");
                }
                break;
            case 'alllienhe':
                include('../../views/admin/lienhe/alllienhe.php');
                break;
            case 'allkhuyenmai':
                include('../../views/admin/khuyenmai/allkhuyenmai.php');
                break;
            case 'addkhuyenmai':
                include('../../views/admin/khuyenmai/addkhuyenmai.php');
                if (isset($_POST["addkhuyenmai"])) {
                    $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
                    $ngay_bat_dau = $_POST['ngay_bat_dau'];
                    $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                    $noi_dung = $_POST['noi_dung'];
                    addkhuyenmai($id_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$ten_khuyen_mai,$noi_dung) ;
                    header("location:index.php?act=allkhuyenmai&table=khuyen_mai");
                }
                break;
            case 'editkhuyenmai':
                include('../../views/admin/khuyenmai/editkhuyenmai.php');
                if (isset($_POST["editkhuyenmai"])) {
                    $id_khuyen_mai = $_POST['id_khuyen_mai'];
                    $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
                    $ngay_bat_dau = $_POST['ngay_bat_dau'];
                    $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                    $noi_dung = $_POST['noi_dung'];
                    editkhuyenmai($id_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$ten_khuyen_mai,$noi_dung);
                    header("location:index.php?act=allkhuyenmai&table=khuyen_mai");
                }
                break;
            case 'alltaikhoan':
                include('../../views/admin/taikhoan/alltaikhoan.php');
                break;
                case 'addtaikhoan':
                    include('../../models/AdminModel/taikhoan/addtaikhoan.php');
                break;case 'edittaikhoan':
                    include('../../models/AdminModel/taikhoan/edittaikhoan.php');
                    break;
           
        }
    }else{
        include("layout/home.php");
    }
?>