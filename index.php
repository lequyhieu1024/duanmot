<?php 
session_start();
    include("config.php");
    include("app/models/ClientModel/taikhoan.php");
    include("app/models/ClientModel/lienhe.php");


    include ("app/views/client/layout/header.php");
    include ("app/controllers/ClientController/ClientController.php");
    include ("app/views/client/layout/footer.php");
?>