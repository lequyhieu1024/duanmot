            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card rounded-xxl p-lg--5 border-0 bg-no-repeat bg-image-contain banner-wrap" style="background-image: url(public/images/fogg-clip.png);">
                                <div class="card-body p-4">
                                    <h2 class="display3-size fw-400 display2-md-size sm-mt-7 sm-pt-10">Tìm kiếm <b class="d-lg-block">Khóa Học </b></h2>    
                                    <div class="form-group mt-lg-4 p-3 border-light border p-2 bg-white rounded-lg ">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <form method="post" action="index.php?redirect=timkiem" class="form-group icon-input mb-0">
                                                    <i class="ti-search font-xs text-grey-400"></i>
                                                    <input type="text" name="search_input" style="color: black; font-size: 16px; width: 100%;" required class="style1-input bg-transparent border-0 pl-5  mb-0 fw-500" placeholder="Nhập tìm kiếm...">
                                            </div>

                                            <div class="col-md-4">
                                                
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" name="tim_kiem" style=" font-size: 16px;" class="w-100 d-block btn bg-current text-white fw-600 ls-3 style1-input p-0 border-0 text-uppercase ">Search</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h2 class="fw-400 font-lg">Khám Phá <b>Danh Mục</b> <a href="#" class="float-right" ></a></h2>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="col-lg-12 mt-3">
                                <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                    <?php $kh = alldanhmuc();
                                    foreach($kh as $khoahoc):
                                    extract($khoahoc);?>                                      
                                        <div class="item">
                                            <div class="card cat-card-hover mr-1 w140 border-0 p-4 rounded-lg text-center" style="background-color: #fcf1eb;">
                                                <a href="index.php?redirect=all_kh_theo_dm&id_danh_muc=<?=$id_danh_muc?>">
                                                    <div class="card-body p-2 ml-1 ">
                                                        <span class="btn-round-xl bg-white"><img style="border-radius:40px" src="public/images/<?=$avt?>" alt="icon" class="p-2"></span>
                                                        <h4 class="fw-600 font-xsss mt-3 mb-0"><?=$ten_danh_muc?> </h4>                   
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>  
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="col-lg-12 mt-3">
                                <form action="index.php?redirect=lockhoahoc" method="post">
                                    <select style="height:35px;width:200px; border: 1px solid #1E74FD; border-radius: 5px;background-color:#1E74FD; color: white; " name="lockhoahoc" id="">
                                        <option value="0" disabled selected hidden><h2>------Lọc khóa học------</h2></option>
                                        <option value="1">Giá giảm dần</option>
                                        <option value="2">Giá tăng dần</option>
                                        <option value="3">Giá dưới 500000$</option>
                                        <option value="4">Giá từ 500000$ - 1000000$</option>
                                        <option value="5">Giá trên 1000000$</option>
                                    </select>
                                    <input style="height:35px;width:60px;background-color:#1E74FD; border: 1px solid #1E74FD; border-radius: 5px; color: white;" name="loc" type="submit" value="OK">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 pt-4 mb-3">
                            <h2 class="fw-400 font-lg d-block">Khóa học <b> nổi bật</b> <a href="#" class="float-right" ><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        <div class="col-lg-12 pt-2">
                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                <?php $ctkh =khoahocnhieuluotxem();
                                foreach($ctkh as $tt):
                                    extract($tt);
                                ?>
                                <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>&id_danh_muc=<?=$id_danh_muc?>">
                                <div class="item">
                                    <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <div class="position-relative d-block"><img style="height:150px" src="public/images/<?=$avt?>" alt="image" class="w-100"></div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1" style="max-width: 120px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; text-align: center;"><?=$ten_khoa_hoc ?></span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?=$tien_hoc?></span>
                                            <div style="max-height: 100px; width: 100%; overflow: hidden;"><h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><div class="text-dark text-grey-900"> <?=$mo_ta?>... </div></h4></div>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2">Lượt xem: <?=$so_luot_xem?></h6>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>

                        
                        <div class="col-lg-12 pt-0 mb-3">
                            <h2 class="fw-400 font-lg d-block">Khóa học <b> mới</b> <a href="#" class="float-right" ><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        
                        <div class="col-lg-12 pt-2">
                        <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                <?php
                                $kh = khoahoc();
                                foreach($kh as $rows):
                                    extract($rows);
                                ?>
                                <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>&id_danh_muc=<?=$id_danh_muc?>">
                                <div class="item">
                                    <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <div class="position-relative d-block"><img style="height:150px" src="public/images/<?=$avt?>" alt="image" class="w-100"></div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1" style="max-width: 120px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; text-align: center;"><?=$ten_khoa_hoc ?></span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?=number_format($tien_hoc,0,"." ,",")?></span>
                                            <div style="max-height: 100px; width: 100%; overflow: hidden;"><h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><div class="text-dark text-grey-900"> <?=$mo_ta?></div></h4></div>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2">Lượt xem: <?=$so_luot_xem?></h6>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <div class="col-lg-12 pt-0 mb-3">
                            <h2 class="fw-400 font-lg d-block">Khóa học <b> đánh giá tốt</b> <a href="#" class="float-right" ><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        
                        <div class="col-lg-12 pt-2">
                        <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                <?php
                                $kh = khoahocdanhgiatot();
                                foreach($kh as $rows):
                                    extract($rows);
                                ?>
                                <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>&id_danh_muc=<?=$id_danh_muc?>">
                                <div class="item">
                                    <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <div class="position-relative d-block"><img style="height:150px" src="public/images/<?=$avt?>" alt="image" class="w-100"></div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1" style="max-width: 140px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; text-align: center;"><?=$ten_khoa_hoc ?></span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?=number_format($tien_hoc,0,"." ,",")?></span>
                                            <div style="max-height: 100px; width: 100%; overflow: hidden;"><h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><div class="text-dark text-grey-900"> <?=$mo_ta?></div></h4></div>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2">Lượt xem: <?=$so_luot_xem?></h6>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <div class="col-lg-12 pt-0 mb-3">
                            <h2 class="fw-400 font-lg d-block">Giảng Viên <b></b> <a href="#" class="float-right" ><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        <div class="col-lg-12 pt-2">
                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">     
                                <?php $gv = giang_vien();
                                foreach($gv as $dsgv){
                                extract($dsgv);?>   
                                    <div class="item">
                                        <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                            <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(public/images/<?=$avt?>);"></div>
                                            <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                                <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img style="height: 100px;" src="public/images/<?=$avt?>" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                <div class="clearfix"></div>
                                                <h4 style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" class="fw-700 font-xsss mt-3 mb-1"><?=$ten_giang_vien ?> </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2"><?=$email?></p>
                                                <a href="index.php?redirect=chitietgiangvien&id_giang_vien=<?=$id_giang_vien?>"><span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Xem Thông Tin</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                         

                    </div>
                </div>
                <?php
                    $info = myInfo();
                    if($info != ""){
                    foreach($info as $tt):
                extract($tt);
                ?>
                <div class="middle-sidebar-right right-scroll-bar">
                    <div class="middle-sidebar-right-content">
                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(public/images/user-pattern.png);">
                                <a href="index.php?redirect=default-settings" class="position-absolute right-0 mr-4" id="dropdownMenu2" ><i class="feather-edit text-grey-500 font-xs"></i></a>
                                
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="public/images/<?=$avt?>" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                <div class="clearfix"></div>
                                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1"><?=$ho_va_ten?></h2>
                                <div class="clearfix"></div>
                                <ul class="list-inline border-0 mt-4">
                                    <li class="list-inline-item"><h4 class="fw-700 font-md"> <?=$so_dien_thoai?></h4></li>
                                    <li class="list-inline-item"><h4 class="fw-700 font-md"><?=$email?> </h4></li>
                                </ul>
                                <?php endforeach ?>
                               
                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                    <?php 
                                        $myskill = myskill();
                                        foreach($myskill as $value):
                                            extract($value);?>
                                        <div class="item"><a href="" class="btn-round-xxxl border bg-greylight"><img src="public/images/<?=$avt?>" alt="icon" class="p-3"></a></div>
                                        <?php endforeach ?>
                                    </div>
                                </div>  
                                
                            </div>
                        </div>
                        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex justify-content-between align-items-end p-4">
                                <div>
                                    <h4 class="font-xsss text-grey-900 mb-2 d-flex align-items-center justify-content-between mt-2 fw-700">
                                        Dark Mode
                                    </h4>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                                    <label class="custom-control-label bg-success" for="darkmodeswitch"></label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>  
                </button>
                <?php } ?>
            </div>    