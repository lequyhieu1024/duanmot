            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card rounded-xxl p-lg--5 border-0 bg-no-repeat bg-image-contain banner-wrap" style="background-image: url(public/images/fogg-clip.png);">
                                <div class="card-body p-4">
                                    <h2 class="display3-size fw-400 display2-md-size sm-mt-7 sm-pt-10">Find a perfect <b class="d-lg-block">Online Course</b></h2>    
                                    <h4 class="text-grey-500 font-xssss fw-500 ml-1 lh-24">For only course you need to learn web development</h4>
                                    <div class="form-group mt-lg-4 p-3 border-light border p-2 bg-white rounded-lg ">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group icon-input mb-0">
                                                    <i class="ti-search font-xs text-grey-400"></i>
                                                    <input type="text" class="style1-input bg-transparent border-0 pl-5 font-xsss mb-0 text-grey-500 fw-500" placeholder="Search online courses..">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group icon-input mb-0">
                                                    <i class="ti-package font-xs text-grey-400"></i>
                                                    <select class="style1-select bg-transparent border-0 pl-5">
                                                        <?php $kh = top_15_khoa_hoc();
                                                        foreach($kh as $top15kh):
                                                            extract($top15kh)?>
                                                        <option value="<?=$id_khoa_hoc?>"><?=$ten_khoa_hoc?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="default-search.html" class="w-100 d-block btn bg-current text-white font-xssss fw-600 ls-3 style1-input p-0 border-0 text-uppercase ">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="text-grey-500 font-xssss fw-500 ml-1 lh-24"> <b class="text-grey-800 text-dark">Popular Search :</b> Designer, Developer, PHP, HTML, CSS, SCSS </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h2 class="fw-400 font-lg">Khám Phá <b>Môn Học</b> <a href="#" class="float-right" ><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="col-lg-12 mt-3">
                                <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                    <?php $kh = khoahoc();
                                    foreach($kh as $khoahoc):
                                    extract($khoahoc);?>                                      
                                        <div class="item">
                                            <div class="card cat-card-hover mr-1 w140 border-0 p-4 rounded-lg text-center" style="background-color: #fcf1eb;">
                                                <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>">
                                                    <div class="card-body p-2 ml-1 ">
                                                        <span class="btn-round-xl bg-white"><img src="public/images/<?=$avt?>" alt="icon" class="p-2"></span>
                                                        <h4 class="fw-600 font-xsss mt-3 mb-0"><?=$ten_khoa_hoc?> <span class="d-block font-xsssss fw-500 text-grey-500 mt-2">Lượt đăng ký: <?=$so_luot_dang_ky?></span></h4>                   
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
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
                                <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>">
                                <div class="item">
                                    <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <div class="position-relative d-block"><img style="height:150px" src="public/images/<?=$avt?>" alt="image" class="w-100"></div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?=$ten_khoa_hoc ?></span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?=$tien_hoc?></span>
                                            <div style="max-height:100px;overflow:hidden"><h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><div class="text-dark text-grey-900"> <?=$mo_ta?>... </div></h4></div>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2">Lượt xem: <?=$so_luot_xem?></h6>
                                            <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                <li><a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>"><img src="public/images/<?=$avt?>" alt="user" class="w30 d-inline-block"></a></li>
                                                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                            </ul>
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
                                <?php $ctkh =khoahoc();
                                foreach($ctkh as $tt):
                                    extract($tt);
                                ?>
                                <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>">
                                <div class="item">
                                    <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <div class="position-relative d-block"><img style="height:150px" src="public/images/<?=$avt?>" alt="image" class="w-100"></div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?=$ten_khoa_hoc ?></span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?=$tien_hoc?></span>
                                            <div style="max-height:100px;overflow:hidden"><h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><div class="text-dark text-grey-900"> <?=$mo_ta?>... </div></h4></div>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2">Lượt xem: <?=$so_luot_xem?></h6>
                                            <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                <li><a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>"><img src="public/images/<?=$avt?>" alt="user" class="w30 d-inline-block"></a></li>
                                                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                            </ul>
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
                                foreach($gv as $dsgv):
                                extract($dsgv);?>   
                                    <div class="item">
                                        <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                            <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(public/images/<?=$avt?>);"></div>
                                            <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                                <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="public/images/<?=$avt?>" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-3 mb-1"><?=$ten_giang_vien ?> </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2"><?=$email?></p>
                                                <a href="index.php?redirect=chitietgiangvien&id_giang_vien=<?=$id_giang_vien?>"><span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Xem Thông Tin</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                         

                    </div>
                </div>
                <div class="middle-sidebar-right right-scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(public/images/user-pattern.png);">
                                <a href="#" class="position-absolute right-0 mr-4" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather-edit text-grey-500 font-xs"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-4 rounded-xxl border-0 shadow-lg" aria-labelledby="dropdownMenu2">
                                    <div class="card-body p-0 d-flex">
                                        <i class="feather-bookmark text-grey-500 mr-3 font-lg"></i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 mr-4">Save Link <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this to your saved items</span></h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="feather-alert-circle text-grey-500 mr-3 font-lg"></i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 mr-4">Hide Post <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="feather-alert-octagon text-grey-500 mr-3 font-lg"></i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 mr-4">Hide all from Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="feather-lock text-grey-500 mr-3 font-lg"></i>
                                        <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 mr-4">Unfollow Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                    </div>
                                </div>
                                <?php
                                //  $info = myInfo();
                                // extract($info);
                                ?>
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="public/images/user-12.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                <div class="clearfix"></div>
                                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">Hendrix Stamp</h2>
                                <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                                <div class="clearfix"></div>
                                <div class="col-12 text-center mt-4 mb-2">
                                    <a href="message.html" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-comment-alt font-sm"></i></a>
                                    <a href="login.html" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-lock font-sm"></i></a>
                                    <a href="#" class="p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                                <ul class="list-inline border-0 mt-4">
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4></li>
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4></li>
                                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4></li>
                                </ul>

                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="public/images/download1.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="public/images/download2.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="public/images/download4.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="public/images/download3.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="public/images/download1.png" alt="icon" class="p-3"></a></div>
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
            </div>    