<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn IT | Learn to know, Learn to do, Learn to earn money</title>
    <link rel="shortcut icon" href="public/images/icon-logo-cong-nghe-thong-tin.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/client.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="header d-flex flex-row">
            <div class="logo col-3">
                <img src="public/images/icon-logo-cong-nghe-thong-tin-1.jpg" alt="">
            </div>
            <div class="danhmuc col-2">
                <ul>
                    <li>
                        danh mục
                    </li>
                </ul>
            </div>
            <div class="khoahocdadangky col-2">
                <p>Khóa Học Của Tôi</p>
            </div>
            <div class="timkiem col-3">
                <form class="form-search" action="" method="post">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập khóa học muốn học">
                    <input type="submit" name="search-button" value="Tìm kiếm">
                </form>
            </div>
            <div class="dangnhapdangxuatdangky col-2">
                <?php 
                    if(isset($_SESSION['ten_tai_khoan'])){
                        echo '<a href="index.php?redirect=logout">Đăng Xuất</a>';
                    }else{
                        echo '<a href="index.php?redirect=login">Đăng nhập</a>';
                    }
                ?>
            </div>
        </div>
        <div class="home">
        
    