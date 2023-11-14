<?php 
session_start();
if(isset($_SESSION['id_role'])){
    if($_SESSION['id_role']==3){
        include("../../../config.php");
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