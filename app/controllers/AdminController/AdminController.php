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
                        if($_FILES['avt']['name'] != ""){
                            $avt = basename($_FILES["avt"]["name"]);
                            $target_dir = "../../../public/images/";
                            $target_file = $target_dir . $avt;
                            move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                        }else{
                            $avt ="";
                        }
                        $ten_danh_muc = $_POST['ten_danh_muc'];
                        adddanhmuc($ten_danh_muc,$mo_ta,$avt,$trang_thai);
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
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    $ten_danh_muc = $_POST['ten_danh_muc'];
                    editdanhmuc($id_danh_muc,$ten_danh_muc,$mo_ta,$avt,$trang_thai);
                    header("location:index.php?act=alldanhmuc&table=danh_muc_khoa_hoc");
                }
                break;
            case 'allkhoahoc':
                include('../../views/admin/khoahoc/allkhoahoc.php');
                break;
            case 'qlkhdadangky':
                include('../../views/admin/khoahoc/qlkhdadangky.php');
                break;
            case 'edit_ql_kh_dadangky':
                    include('../../views/admin/khoahoc/edit_ql_kh_dadangky.php');
                    if(isset($_POST['edit_trangthai'])){
                        $trang_thai = $_POST['trang_thai'];
                        $id_dang_ky_khoa_hoc = $_GET['id_edit'];
                        editQLkhdadangky($id_dang_ky_khoa_hoc, $trang_thai);
                        header("location: index.php?act=qlkhdadangky");
                    }
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
                    editkhoahoc($id_khoa_hoc,$ten_khoa_hoc,$avt,$tien_hoc,$mo_ta,$trang_thai,$id_giang_vien,$id_danh_muc,$slideshow);
                    header("location:index.php?act=allkhoahoc&table=khoa_hoc");
                }
                break;
                case 'alllotrinh':
                    include('../../views/admin/lotrinhhoc/alllotrinh.php');
                    break;
                case 'addlotrinh':
                    include('../../views/admin/lotrinhhoc/addlotrinh.php');
                    if(isset($_POST['addlotrinh'])){
                        $thoi_gian = $_POST['thoi_gian'];
                        addlotrinh($thoi_gian);
                        echo '<h2 style="color: red">Thêm thành công!</h2>';
                    }
                    break;
                case 'editlotrinh':
                    include('../../views/admin/lotrinhhoc/editlotrinh.php');
                    if(isset($_POST['editlotrinh'])){
                        $thoi_gian = $_POST['thoi_gian'];
                        $id_lo_trinh = $_POST['id_lo_trinh'];
                        $id_khoa_hoc = $_POST['id_khoa_hoc'];
                        editlotrinh($id_lo_trinh,$thoi_gian,);
                        header("location:index.php?act=alllotrinh&table=lo_trinh_hoc");
                    }
                    break;
                case 'allltkh':
                    include('../../views/admin/lotrinhkhoahoc/allltkh.php');
                    break;
                case 'addltkh':
                    include('../../views/admin/lotrinhkhoahoc/addltkh.php');
                    if(isset($_POST['addltkh'])){
                        $id_lo_trinh = $_POST['id_lo_trinh'];
                        $id_khoa_hoc = $_POST['id_khoa_hoc'];
                        addltkh($id_lo_trinh,$id_khoa_hoc);
                        echo '<h2 style="color: red">Thêm thành công!</h2>';
                    }
                    break;
                case 'editltkh':
                    include('../../views/admin/lotrinhkhoahoc/editltkh.php');
                    if(isset($_POST['editltkh'])){
                        $id_ltkh = $_POST['id_lo_trinh_khoa_hoc'];
                        $id_lo_trinh = $_POST['id_lo_trinh'];
                        $id_khoa_hoc = $_POST['id_khoa_hoc'];
                        editltkh($id_ltkh,$id_lo_trinh,$id_khoa_hoc);
                        header("location:index.php?act=allltkh&table=lo_trinh_hoc");
                    }
                    break;
            case 'allgiangvien':
                include('../../views/admin/giangvien/allgiangvien.php');
                break;
            case 'alldanhgia':
                include('../../views/admin/danhgia/alldanhgia.php');
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
                    addgiangvien($ma_giang_vien,$ten_giang_vien,$email,$avt,$so_dien_thoai,$mo_ta,$nam_sinh);
                    echo '<h2 style="color: red">Thêm thành công!</h2>';
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
                    addrole($name_role,$mo_ta);
                    echo '<h2 style="color: red">Thêm thành công!</h2>';
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
            case 'ttnguoiguilh':
                include('../../views/admin/lienhe/ttnguoiguilh.php');
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
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    addkhuyenmai($ngay_bat_dau,$ngay_ket_thuc,$ten_khuyen_mai,$noi_dung,$avt) ;
                    echo '<h2 style="color: red">Thêm thành công!</h2>';
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
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    editkhuyenmai($id_khuyen_mai,$ngay_bat_dau,$ngay_ket_thuc,$ten_khuyen_mai,$noi_dung,$avt);
                    header("location:index.php?act=allkhuyenmai&table=khuyen_mai");
                }
                break;
                case 'alltaikhoanqtv':
                    include('../../views/admin/taikhoan/alltaikhoanqtv.php');
                    break;
                case 'alltaikhoanhv':
                    include('../../views/admin/taikhoan/alltaikhoanhv.php');
                    break;
            case 'addtaikhoan':
                include('../../views/admin/taikhoan/addtaikhoan.php');
                if (isset($_POST["addtaikhoan"])) {
                    $ten_tai_khoan = $_POST['ten_tai_khoan'];
                    $email = $_POST['email'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    $ho_va_ten = $_POST['ho_va_ten'];
                    $mat_khau = $_POST['mat_khau'];
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    $nam_sinh = $_POST['nam_sinh'];
                    $id_role = $_POST['id_role'];
                    addtaikhoan($ten_tai_khoan,$email,$nam_sinh,$avt,$so_dien_thoai,$id_role,$ho_va_ten,$mat_khau);  
                    echo '<h2 style="color: red">Thêm thành công!</h2>';
                }
                break;
            case 'edittaikhoan':
                include('../../views/admin/taikhoan/edittaikhoan.php');
                if (isset($_POST["edittaikhoan"])) {
                    $id_tai_khoan = $_POST["id_tai_khoan"];
                    $ten_tai_khoan = $_POST['ten_tai_khoan'];
                    $email = $_POST['email'];
                    $mat_khau = $_POST['mat_khau'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    $ho_va_ten = $_POST['ho_va_ten'];
                    if($_FILES['avt']['name'] != ""){
                        $avt = basename($_FILES["avt"]["name"]);
                        $target_dir = "../../../public/images/";
                        $target_file = $target_dir . $avt;
                        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
                    }else{
                        $avt ="";
                    }
                    $nam_sinh = $_POST['nam_sinh'];
                    $id_role = $_POST['id_role'];
                    edittaikhoan($id_tai_khoan,$ten_tai_khoan,$email,$nam_sinh,$avt,$so_dien_thoai,$id_role,$ho_va_ten,$mat_khau);
                    echo '<h2 style="color: red">Thêm thành công!</h2>'; 
                }
                break;
            case 'lockhoahoc':
                if(isset($_POST['loc'])){
                    $value = $_POST['lockhoahoc'];
                    include('../../views/admin/khoahoc/locTheoTrangThai.php');
                }
                break;
            case 'contact':
                include('../../views/admin/layout/contact.php');
                break;
            case 'delete':
                include('../../models/adminmodel/delete.php');
                break; 
        }
    }else{
        include("layout/home.php");
    }
?>