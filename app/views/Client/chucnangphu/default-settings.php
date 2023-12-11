
            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            
                            <div class="card-body p-lg-5 p-4 w-100 border-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb-4 font-lg fw-700 mont-font mb-5">Settings</h4>
                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Genaral</div>

                                        <ul class="list-inline mb-4">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="index.php?redirect=myinfo" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-primary-gradiant text-white feather-home font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Xem thông tin tài khoản</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="index.php?redirect=changeMyInfo" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-gold-gradiant text-white feather-map-pin font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Thay đổi thông tin cá nhân</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block  mr-0"><a href="index.php?redirect=changepassword" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-blue-gradiant text-white feather-inbox font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Password</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                        </ul>

                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Other</div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="index.php?redirect=lienhe" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-primary-gradiant text-white feather-help-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Help</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <?php if(isset($_SESSION['ten_tai_khoan'])):?>
                                            <li class="list-inline-item d-block mr-0"><a href="index.php?redirect=logout" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-red-gradiant text-white feather-lock font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Logout</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <?php else:?>
                                                <li class="list-inline-item d-block mr-0"><a href="app/views/client/taikhoan/login.php" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-red-gradiant text-white feather-lock font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Log In</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                                <li class="list-inline-item d-block mr-0"><a href="app/views/client/taikhoan/register.php" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-red-gradiant text-white feather-lock font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Regisrer</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <?php endif?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>        
                             
                    </div>
                </div>
            </div>            
    