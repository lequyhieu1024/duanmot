
        <div class="middle-sidebar-left">
            <div class="row">
                <div class="col-xl-8 col-xxl-9">
                    <?php 
                    updateview();
                    $ctkh = chitietkhoahoc();
                    $khct = current($ctkh);
                            extract($khct);
                    ?>
                    <div class="card border-0 mb-0 rounded-lg overflow-hidden" style="background-image: url(images/ivan-samkov.jpg);">
                        <div class="card-body p-5 bg-black-08">
                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?=$ten_khoa_hoc?></span>
                            <h2 class="fw-700 font-lg d-block lh-4 mb-1 text-white mt-2">Học theo hướng : <?=$ten_danh_muc?></h2>
                            <div class="clearfix"></div>
                            <div class="star d-block w-100 text-left mt-2">
                                <img style="width:250px;height:150px" src="public/images/<?=$avt_kh?>" alt="star">
                            </div>
                            <p class="review-link font-xssss fw-600 text-grey-500 lh-3 mb-4"></p>

                             <?php echo ($danh_gia != "") ? '<a class="btn-round-lg ml-3 d-inline-block rounded-lg bg-greylight font-weight-bold">'. number_format($danh_gia, 1) .'<i class="fa fa-star" style="color: #f5cd3d;"></i>' : "<a class='text-white font-weight-bold ml-3'>Chưa có đánh giá</a>"; ?></a>
                            <?php
                            if(isset($_SESSION['id_tai_khoan'])):
                                $khyt = checkYeuThich();  
                                echo (empty($khyt)) ? '
                                <a href="index.php?redirect=yeuthichkhoahoc&id_khoa_hoc='.$id_khoa_hoc.'&id_danh_muc='.$id_danh_muc.'" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">Yêu thích khóa học</a>'
                                : '<a href="index.php?redirect=huyyeuthichkhoahoc&id_khoa_hoc='.$id_khoa_hoc.'&id_danh_muc='.$id_danh_muc.'" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">Hủy yêu thích</a>'?>
                            <?php else:?>
                                
                                <?php endif ?>
                        </div>
                    </div>
                    <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4 alert-success">
                        <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 text-success mb-4">Mô tả khóa học</h2>
                        <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i><?php echo nl2br($mo_ta);?></h4>
                    </div>
                    <div class="khoahoclienquan">
                        <div class="col-lg-12 mt-3">
                            <div class="col-lg-12 mt-3">
                            <h1>Khóa học liên quan</h1>
                                <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                    <?php $kh = khoahoclienquan();
                                    foreach($kh as $khoahoc):
                                    extract($khoahoc);?>                                      
                                        <div class="item">
                                            <div class="card cat-card-hover mr-1 w140 border-0 p-4 rounded-lg text-center" style="background-color: #fcf1eb;">
                                                <a href="index.php?redirect=chitietkhoahoc&id_danh_muc=<?=$id_danh_muc?>&id_khoa_hoc=<?=$id_khoa_hoc?>">
                                                    <div class="card-body p-2 ml-1 ">
                                                        <span class="btn-round-xl bg-white"><img style="border-radius:40px" src="public/images/<?=$avt_kh?>" alt="icon" class="p-2"></span>
                                                        <h4 class="fw-600 font-xsss mt-3 mb-0"><?=$ten_khoa_hoc?> </h4>                   
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3">
                    <?php 
                    updateview();
                    $ctkh = chitietkhoahoc();
                    $khct = current($ctkh);
                            extract($khct);
                    ?>
                    <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0 shadow-xss">
                        <div class="card-body p-3 d-block text-left">
                            <h1 class="display1-size text-current fw-700 mb-4"> $ <?=number_format($tien_hoc,0,"." ,",")?> <span class="font-xssss text-grey-500 fw-500"> / Chưa tính khuyến mại</span></h1>
                                <h4 class="pl-35 mb-4 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-bar-chart-2 font-lg text-current position-absolute left-0"></i> Lộ trình học <span class="d-block text-grey-500 mt-1 font-xssss"><?php $lt = lotrinh(); foreach($lt as $rows):extract($rows);echo ' - '. $thoi_gian ;endforeach?></span></h4>
                                <h4 class="pl-35 mb-4 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-layers font-lg text-current position-absolute left-0"></i> Số lượt yêu thích  <span class="d-block text-grey-500 mt-1 font-xssss"><?php $slyt = dem_luot_yeu_thich_khoa_hoc(); echo $slyt ?></span></h4>
                                <h4 class="pl-35 mb-4 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-shuffle font-lg text-current position-absolute left-0"></i> Hướng học <span class="d-block text-grey-500 mt-1 font-xssss"><?=$ten_danh_muc?> </span></h4>
                                <h4 class="pl-35 mb-4 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-book-open font-lg text-current position-absolute left-0"></i> Chuyên Ngành <span class="d-block text-grey-500 mt-1 font-xssss">Information Technology</span></h4>
                                <h4 class="pl-35 mb-4 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-user font-lg text-current position-absolute left-0"></i> Giảng Viên <span class="d-block text-grey-500 mt-1 font-xssss"><img style="width:20px;" src="public/images/<?=$avt_gv?>" alt=""> <?=$ma_giang_vien?>-<?=$ten_giang_vien?> </span></h4>
                                <h4 class="pl-35 mb-0 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-award font-lg text-current position-absolute left-0"></i> Kinh Ngiệm Giảng Viên <span class="d-block text-grey-500 mt-1 font-xssss"><?=$mota_gv?> </span></h4>
                                <a href="index.php?redirect=thongtinthanhtoan&table=khoa_hoc&id=id_khoa_hoc&id_edit=<?=$id_khoa_hoc?>" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-block mt-4 w-100 p-2 lh-34 text-center ls-3 ">Đăng ký ngay</a>
                        </div>
                    </div>

                    <div class="card w-100 border-0 mt-0 mb-4 p-4 shadow-xss position-relative rounded-lg bg-white"> 
                        <h4>Bình Luận</h4>
                        <!-- Bình luận -->
                        <?php $binhluan = binhluankhoahoc();
                            foreach($binhluan as $cmt):
                            extract($cmt); ?>
                            <div class="row">
                                <div class="col-2 text-left">
                                    <figure class="avatar float-left mb-0"><img src="public/images/<?=$avt_tk?>" alt="image" class="float-right shadow-none w40 mr-2"></figure>
                                </div>
                                <div class="col-10 pl-4">
                                    <div class="content">
                                        <h6 class="author-name font-xssss fw-600 mb-0 text-grey-800"><?=$ten_tai_khoan ?></h6>
                                        <h6 class="d-block font-xsssss fw-500 text-grey-500 mt-2 mb-0"><?=$ngay_binh_luan?></h6>
                                        <div class="star d-block w-100 text-left">
                                        </div>                            
                                        <p class="comment-text lh-24 fw-500 font-xssss text-grey-500 mt-2"><?=$noi_dung_binh_luan?></i></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                    
                            <?php include("app/views/Client/chucnangphu/binhluan.php");?>
                    </div>  
                </div>
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>  
                </button>
            </div>            
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="index.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="component.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="pages.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
            <a href="#" class="nav-content-bttn right-menu"><i class="feather-layers"></i></a>
            <a href="#" data-toggle="modal" data-target="#mySetting" class="nav-content-bttn"><img src="images/female-profile.png" alt="user" class="w40"></a>
        </div>
    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/video-player.js"></script>