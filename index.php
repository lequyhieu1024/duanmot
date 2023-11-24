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
// <<<<<<< HEAD
=======
    include("app/models/ClientModel/khuyenmai.php");


// >>>>>>> 98a8f1dfe719adfb916b8a9674b4eaa2d2e5dec8
    include ("app/views/client/layout/header.php");
    include ("app/controllers/ClientController/ClientController.php");
    include ("app/views/client/layout/footer.php");
?>