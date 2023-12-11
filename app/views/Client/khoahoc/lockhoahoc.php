<?php 
if($value ==1){
    $ctkh =lockhoahocgiagiamdan();
}else if($value==2){
    $ctkh = lockhoahocgiatangdan();
}else if($value==3){
    $ctkh = lockhoahocduoi500();
}else if($value==4){
    $ctkh = lockhoahocduoi1500();
}else if($value==5){
    $ctkh = lockhoahoctren1500();
}else{
    echo '<script>alert("Thao tác sai. Lọc lại !")</script>';
    echo '<script>
        window.location.href="index.php";
    </script>';
}
?>
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
                                                    <input type="text" name="search_input" required class="style1-input bg-transparent border-0 pl-5 font-xsss mb-0 text-grey-500 fw-500" placeholder="Nhập tìm kiếm...">
                                            </div>

                                            <div class="col-md-4">
                                                
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" name="tim_kiem" class="w-100 d-block btn bg-current text-white font-xssss fw-600 ls-3 style1-input p-0 border-0 text-uppercase ">Search</button>
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
                                                        <span class="btn-round-xl bg-white"><img src="public/images/<?=$avt?>" alt="icon" class="p-2"></span>
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
                                        <option value="3">Giá dưới 500000VNĐ</option>
                                        <option value="4">Giá từ 500 000VNĐ - 1 000 000 VNĐ</option>
                                        <option value="5">Giá trên 1 000 000 VNĐ</option>
                                    </select>
                                    <input style="height:35px;width:60px;background-color:#1E74FD; border: 1px solid #1E74FD; border-radius: 5px; color: white;" name="loc" type="submit" value="OK">
                                </form>
                            </div>
                        </div>
    <div class="col-lg-12 pt-2">
    <div class="d-flex flex-wrap">
        <?php 
            if(!$ctkh){
                echo '<script>alert("Không có kết quả")</script>';
            }else{
                foreach($ctkh as $tt):
                    extract($tt);
            
            ?>
            <div class="col-lg-4 mb-4">
                <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>&id_danh_muc=<?=$id_danh_muc?>">
                    <div class="card course-card p-0 shadow-xss border-0 rounded-lg overflow-hidden">
                        <div class="card-image mb-3">
                            <div class="position-relative d-block"><img style="height:150px" src="public/images/<?=$avt?>" alt="image" class="w-100"></div>
                        </div>
                        <div class="card-body pt-0">
                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?=$ten_khoa_hoc ?></span>
                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?=number_format($tien_hoc,0,"." ,",")?></span>
                            <div style="max-height: 100px; width: 100%; overflow: hidden;"><h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><div class="text-dark text-grey-900"> <?=$mo_ta?>... </div></h4></div>
                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2">Lượt xem: <?=$so_luot_xem?></h6>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; }  ?>
    </div>
</div>
