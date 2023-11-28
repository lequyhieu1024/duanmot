<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php 
if(empty($_SESSION['ten_tai_khoan'])){
  echo 'Chưa đăng nhập';
}else{
 $myCources = khoahocyeuthichcuatoi();?>
<div class="col-lg-12 pt-2">
    <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
            <?php
            foreach($myCources as $rows):
                extract($rows);
            ?>
            <a href="index.php?redirect=chitietkhoahoc&id_khoa_hoc=<?=$id_khoa_hoc?>&id_danh_muc=<?=$id_danh_muc?>">
            <div class="item">
                <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                    <div class="card-image w-100 mb-3">
                        <div class="position-relative d-block"><img style="height:150px" src="public/images/<?=$avt?>" alt="image" class="w-100"></div>
                    </div>
                    <div class="card-body pt-0">
                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?=$ten_khoa_hoc ?></span>
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
<?php } ?>