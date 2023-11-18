<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn IT | Learn to know, Learn to do, Learn to earn money</title>
    <link rel="shortcut icon" href="public/images/icon-logo-cong-nghe-thong-tin.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/client.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div style="border:2px solid" class="row col-sm-12">line</div> 
        <div class="row d-flex flex-row">
            <div class="logo col-md-2 col-xs-6 col-sm-4">
                <img src="public/images/icon-logo-cong-nghe-thong-tin-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="danhmuc d-none d-md-block col-md-4">
                <ul>
                    <li>
                        danh mục
                    </li>
                </ul>
            </div>
            
            <div class="timkiem col-md-4 col-xs-6 col-sm-4">
                <form class="form-search" action="" method="post">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập khóa học muốn học">
                    <button type="submit" name="search-button"><i class="fa fa-search"></i></button>
                </form>
                <div class="khoahocdadangky">
                    <p>Khóa Học Của Tôi</p>
                </div>
            </div>
            <div class="dangnhapdangxuatdangky col-md-2 col-xs-12 col-sm-4">
                <?php 
                    if(isset($_SESSION['ten_tai_khoan'])){
                        echo '<a href="index.php?redirect=logout">Đăng Xuất</a>'; echo '<br>';
                            if($_SESSION['id_role']==3){
                                echo '<a href="app/views/admin/index.php">đến trang qtv</a>';echo '<br>';
                            }
                            echo $_SESSION['id_role'];echo '<br>';
                            echo $_SESSION['ten_tai_khoan'];echo '<br>';
                    }else{
                        echo '<a href="index.php?redirect=login">Đăng nhập</a>';
                    }
                ?>
            </div>
        </div>
        