<?php 
session_start();
if(isset($_SESSION['id_role'])){
    if($_SESSION['id_role']==3){
        include("../../../config.php");
        include("../../models/AdminModel/binhluan.php");
        include("../../models/AdminModel/danhmuc.php");
        include("../../models/AdminModel/khoahoc.php");
        include("../../models/AdminModel/lienhe.php");
        include("../../models/AdminModel/giangvien.php");
        include("../../models/AdminModel/quyen.php");
        include("../../models/AdminModel/taikhoan.php");
        include("../../models/AdminModel/khuyenmai.php");


        include("layout/header.php");
        include("../../controllers/AdminController/AdminController.php");
        include("layout/footer.php");
    }else{
    echo '<img style="width:100%;height:100%" src="../public/images/404.jpg" alt="">';
    }
}else{
    echo '<img style="width:100%;height:100%" src="../public/images/404.jpg" alt="">';
}
?>