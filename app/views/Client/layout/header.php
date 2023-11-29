<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/elomoas/default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 13:06:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn IT | Learn to know, Learn to do, Learn to earn money</title>

    <link rel="stylesheet" href="public/css/themify-icons.css">
    <link rel="stylesheet" href="public/css/feather.css">
    <!-- Favicon icon -->
    <link rel="icon" type="public/image/png" sizes="16x16" href="public/images/logo2.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="app/views/admin/plugins/fontawesome-free/css/all.min.css">
    

</head>
<?php $sl=dem_kh_cua_toi();?>
<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation -->
        <nav class="navigation scroll-bar">
            <div class="container pl-0 pr-0">
                <div class="nav-content">
                    <div class="nav-top">
                        <a href="index.php"><img src="public/images/logo.png" style="width: 110px; padding: 5px;"></img><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xl logo-text mb-0">Learn IT. </span> </a>
                        <a href="#" class="close-nav d-inline-block d-lg-none"><i class="ti-close bg-grey mb-4 btn-round-sm font-xssss fw-700 text-dark ml-auto mr-2 "></i></a>
                    </div>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span>-------------------------------------------- </span></div>
                    <ul class="mb-3">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li><a href="index.php" class="nav-content-bttn open-font" data-tab="chats"><i class="feather-home mr-3"></i><span>Trang chủ</span></a></li>
                        <li><a href="index.php?redirect=khoahoccuatoi" class="nav-content-bttn open-font" data-tab="friends"><i class="feather-book-open mr-3"></i><span>Khóa học của tôi <?php echo (empty($sl)) ? "" : "($sl)"  ?></span></a></li>
                        <li><a href="index.php?redirect=khoahocyeuthich" class="nav-content-bttn open-font" data-tab="friends"><i class="feather-book-open mr-3"></i><span>Khóa học Yêu Thích</span></a></li>
                        <li><a href="index.php?redirect=allkhuyenmai&table=khuyen_mai" class="nav-content-bttn open-font" data-tab="favorites"><i class="feather-gift mr-3"></i><span>Chương trình khuyến mãi</span></a></li>
                        <li><a href="index.php?redirect=lienhe" class="nav-content-bttn open-font" data-tab="favorites"><i class="feather-message-square mr-3"></i><span>Liên Hệ & Hỏi Đáp</span></a></li>                      
                    </ul>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span>Danh Mục</span></div>
                    <ul class="mb-3">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <?php $danhmuc = alldanhmuc();
                        foreach($danhmuc as $alldanhmuc):
                        extract($alldanhmuc);?>
                        <li><a href="index.php?redirect=all_kh_theo_dm&id_danh_muc=<?=$id_danh_muc?>" class=" nav-content-bttn open-font" data-tab="chats"><i class="feather-book mr-3"></i><span><?=$ten_danh_muc;?></span></a></li>         
                        <?php endforeach?>            
                    </ul>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span>Giảng Viên </span>Kỳ Cựu</div>
                    <ul class="mb-3">
                        <?php $top5gv = top_5_giang_vien();
                        foreach($top5gv as $gv):
                        extract($gv);?>
                        <li><a href="index.php?redirect=chitietgiangvien&id_giang_vien=<?=$id_giang_vien?>" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="public/images/<?=$avt?>" alt="teacher" class="w40 mr-2"><span> <?=$ma_giang_vien?> </span></a></li>
                        <?php endforeach?>
                    </ul>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                    <ul class="mb-3">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li><a href="index.php?redirect=default-settings" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Cài đặt</span></a></li>
                        <li><?php if(isset($_SESSION['ten_tai_khoan'])){
                            if($_SESSION['id_role']==3){
                                echo '<li><a href="app/views/admin/index.php" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i style="color:green" class="font-sm feather-log-in mr-3 text-green-500"></i><span>Trang QTV</span></a>';
                            }else if($_SESSION['id_role']==2){
                                echo '<li><a href="app/views/nhanvien/index.php" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i style="color:green" class="font-sm feather-log-in mr-3 text-green-500"></i><span>Cpanel Nhân Viên</span></a>';
                            }
                            echo '<a href="index.php?redirect=logout" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i style="color:red" class="font-sm feather-log-out mr-3 text-red-500"></i><span>Đăng xuất</span></a></li>';
                        }else{
                            echo '<li><a href="app/views/client/taikhoan/login.php" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i style="color:green" class="font-sm feather-log-in mr-3 text-green-500"></i><span>Đăng nhập</span></a>';
                            echo '<a href="app/views/client/taikhoan/register.php" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i style="color:blue" class="font-sm feather-user-plus mr-3 text-blue-500"></i><span>Đăng ký</span></a></li>';
                        }
                        ?>
                            
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content">
            <div class="middle-sidebar-header bg-white">
                <button class="header-menu"></button>
                <form action="#" class="float-left header-search">
                    <div class="form-group mb-0 icon-input">
                        <marquee class="bg-transparent border-0 lh-32 pt-2 pb-2 pl-5 pr-3 font-xsss fw-500 rounded-xl w350">Chào mừng đến website của Hiếu Huân Tuấn</marquee>
                    </div>
                </form>
                <ul class="d-flex ml-auto right-menu-icon">
                    <!-- <li><a href="index.php?redirect=mycontact"><i class="feather-message-square font-xl text-current"></i></a></li> -->
                    <li>
                        <a href="#"><i class="feather-settings animation-spin d-inline-block font-xl text-current"></i>
                            <div class="menu-dropdown switchcolor-wrap">
                                <h4 class="fw-700 font-xs mb-4">Settings</h4>
                                 <h6 class="font-xssss text-grey-500 fw-700 mb-3 d-block">Choose Color Theme</h6>
                                <ul>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="red" checked=""><i class="ti-check"></i>
                                            <span class="circle-color bg-red" style="background-color: #ff3b30;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="green"><i class="ti-check"></i>
                                            <span class="circle-color bg-green" style="background-color: #4cd964;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="blue" checked=""><i class="ti-check"></i>
                                            <span class="circle-color bg-blue" style="background-color: #132977;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="pink"><i class="ti-check"></i>
                                            <span class="circle-color bg-pink" style="background-color: #ff2d55;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="yellow"><i class="ti-check"></i>
                                            <span class="circle-color bg-yellow" style="background-color: #ffcc00;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="orange"><i class="ti-check"></i>
                                            <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="gray"><i class="ti-check"></i>
                                            <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                                        </label>
                                    </li>

                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="brown"><i class="ti-check"></i>
                                            <span class="circle-color bg-brown" style="background-color: #D2691E;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="darkgreen"><i class="ti-check"></i>
                                            <span class="circle-color bg-darkgreen" style="background-color: #228B22;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="deeppink"><i class="ti-check"></i>
                                            <span class="circle-color bg-deeppink" style="background-color: #FFC0CB;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="cadetblue"><i class="ti-check"></i>
                                            <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                                        </label>
                                    </li>
                                    <li class="ml-0 d-inline-block">
                                        <label class="item-radio item-content">
                                            <input type="radio" name="color-radio" value="darkorchid"><i class="ti-check"></i>
                                            <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                                        </label>
                                    </li>
                                </ul>
                                <div class="card bg-transparent-card border-0 d-block mt-3">
                                    <h4 class="d-inline font-xssss mont-font fw-700">Header Background</h4>
                                    <div class="d-inline float-right mt-1">
                                        <label class="toggle toggle-menu-color"><input type="checkbox"><span class="toggle-icon"></span></label>
                                    </div>
                                </div>
                                <div class="card bg-transparent-card border-0 d-block mt-3">
                                    <h4 class="d-inline font-xssss mont-font fw-700">Sticky Header</h4>
                                    <div class="d-inline float-right mt-1">
                                        <label class="toggle toggle-sticky"><input type="checkbox"><span class="toggle-icon"></span></label>
                                    </div>
                                </div>
                                <div class="card bg-transparent-card border-0 d-block mt-3">
                                    <h4 class="d-inline font-xssss mont-font fw-700">Full Screen</h4>
                                    <div class="d-inline float-right mt-1">
                                        <label class="toggle toggle-screen"><input type="checkbox"><span class="toggle-icon"></span></label>
                                    </div>
                                </div>
                                <div class="card bg-transparent-card border-0 d-block mt-3">
                                    <h4 class="d-inline font-xssss mont-font fw-700">Menu Position</h4>
                                    <div class="d-inline float-right mt-1">
                                        <label class="toggle toggle-menu"><input type="checkbox"><span class="toggle-icon"></span></label>
                                    </div>
                                </div>
                                <div class="card bg-transparent-card border-0 d-block mt-3">
                                    <h4 class="d-inline font-xssss mont-font fw-700">Dark Mode</h4>
                                    <div class="d-inline float-right mt-1">
                                        <label class="toggle toggle-dark"><input type="checkbox"><span class="toggle-icon"></span></label>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    
                    <?php
                    if(isset($_SESSION['ten_tai_khoan'])){
                    $info = myInfo();
                    foreach($info as $tt):
                    extract($tt);
                    ?>
                    <li><a href="index.php?redirect=myinfo"><img src="public/images/<?=$avt?>" alt="user" class="w40 mt--1"></a></li>
                    <?php endforeach?>
                    <li><a href="#" class="menu-search-icon"><i class="feather-search text-grey-900 font-lg"></i></a></li>
                    <?php }else{ ?>
                        <li><a href="#"><i class="fa fa-user"></i></a></li>
                    <li><a href="#" class="menu-search-icon"><i class="feather-search text-grey-900 font-lg"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
                        
