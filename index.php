<?php 
session_start();
    include("config.php");
    include("app/models/ClientModel/taikhoan.php");
    include("app/models/ClientModel/lienhe.php");
    include("app/models/ClientModel/khoahoc.php");
    include("app/models/ClientModel/giangvien.php");
    include("app/models/ClientModel/binhluan.php");
    include("app/models/ClientModel/danhmuc.php");
    include("app/models/ClientModel/timkiem.php");


    include ("app/views/client/layout/header.php");
    include ("app/controllers/ClientController/ClientController.php");
    include ("app/views/client/layout/footer.php");
?>