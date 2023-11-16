<?php 
    if(isset($_GET["act"])){
        $act = $_GET['act'];
        switch ($act) {
            case 'alldanhmuc':
                include('../../models/AdminModel/danhmuc/alldanhmuc.php');
                break;
            case 'adddanhmuc':
                include('../../models/AdminModel/danhmuc/adddanhmuc.php');
                break;
            case 'editdanhmuc':
                include('../../models/AdminModel/danhmuc/editdanhmuc.php');
                break;
            case 'delete':
                include('../../models/AdminModel/delete.php');
                break;
            case 'allkhoahoc':
                include('../../models/AdminModel/khoahoc/allkhoahoc.php');
                break;
            case 'khtheodm':
                include('../../models/AdminModel/khoahoc/khtheodm.php');
                break;
            case 'addkhoahoc':
                include('../../models/AdminModel/khoahoc/addkhoahoc.php');
                break;
            case 'editkhoahoc':
                include('../../models/AdminModel/khoahoc/editkhoahoc.php');
                break;
            case 'allgiangvien':
                include('../../models/AdminModel/giangvien/allgiangvien.php');
                break;
            case 'addgiangvien':
                include('../../models/AdminModel/giangvien/addgiangvien.php');
                break;
            case 'editgiangvien':
                include('../../models/AdminModel/giangvien/editgiangvien.php');
                break;
            case 'allbinhluan':
                include('../../models/AdminModel/binhluan/allbinhluan.php');
                break;
            case 'addrole':
                include('../../models/AdminModel/quyennguoitruycap/addrole.php');
                break;
            case 'allrole':
                include('../../models/AdminModel/quyennguoitruycap/allrole.php');
                break;
            case 'editrole':
                include('../../models/AdminModel/quyennguoitruycap/editrole.php');
                break;
            case 'alllienhe':
                include('../../models/AdminModel/lienhe/alllienhe.php');
                break;
            case 'allkhuyenmai':
                include('../../models/AdminModel/khuyenmai/allkhuyenmai.php');
                break;
            case 'addkhuyenmai':
                include('../../models/AdminModel/khuyenmai/addkhuyenmai.php');
                break;
            case 'editkhuyenmai':
                include('../../models/AdminModel/khuyenmai/editkhuyenmai.php');
                break;
            case 'alltaikhoan':
                include('../../models/AdminModel/taikhoan/alltaikhoan.php');
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