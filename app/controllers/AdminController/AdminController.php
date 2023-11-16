<?php 
    if(isset($_GET["act"])){
        $act = $_GET['act'];
        switch ($act) {
            case 'alldanhmuc':
                include('../../views/admin/danhmuc/alldanhmuc.php');
                break;
            case 'adddanhmuc':
                include('../../views/admin/danhmuc/adddanhmuc.php');
                break;
            case 'editdanhmuc':
                include('../../views/admin/danhmuc/editdanhmuc.php');
                break;
            case 'delete':
                include('../../models/adminmodel/delete.php');
                break;
            case 'allkhoahoc':
                include('../../views/admin/khoahoc/allkhoahoc.php');
                break;
            case 'khtheodm':
                include('../../views/admin/khoahoc/khtheodm.php');
                break;
            case 'addkhoahoc':
                include('../../views/admin/khoahoc/addkhoahoc.php');
                break;
            case 'editkhoahoc':
                include('../../views/admin/khoahoc/editkhoahoc.php');
                break;
            case 'allgiangvien':
                include('../../views/admin/giangvien/allgiangvien.php');
                break;
            case 'addgiangvien':
                include('../../views/admin/giangvien/addgiangvien.php');
                break;
            case 'editgiangvien':
                include('../../views/admin/giangvien/editgiangvien.php');
                break;
            case 'allbinhluan':
                include('../../views/admin/binhluan/allbinhluan.php');
                break;
            case 'addrole':
                include('../../views/admin/quyennguoitruycap/addrole.php');
                break;
            case 'allrole':
                include('../../views/admin/quyennguoitruycap/allrole.php');
                break;
            case 'editrole':
                include('../../views/admin/quyennguoitruycap/editrole.php');
                break;
            case 'alllienhe':
                include('../../views/admin/lienhe/alllienhe.php');
                break;
            case 'allkhuyenmai':
                include('../../views/admin/khuyenmai/allkhuyenmai.php');
                break;
            case 'addkhuyenmai':
                include('../../views/admin/khuyenmai/addkhuyenmai.php');
                break;
            case 'editkhuyenmai':
                include('../../views/admin/khuyenmai/editkhuyenmai.php');
                break;
            case 'alltaikhoan':
                include('../../views/admin/taikhoan/alltaikhoan.php');
                break;
            case 'addtaikhoan':
                include('../../views/admin/taikhoan/addtaikhoan.php');
                break;
            case 'edittaikhoan':
                include('../../views/admin/taikhoan/edittaikhoan.php');
                break;
            case 'contact':
                include('../../views/admin/layout/contact.php');
                break;
                    
        }
    }else{
        include("layout/home.php");
    }
?>