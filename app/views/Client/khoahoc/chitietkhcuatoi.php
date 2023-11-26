<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  $myCources = chitietkhcuatoi($id_khoa_hoc);?> 
    <div style="margin:30px" class="container">
        <h1>Chi tiết khóa học đã đăng ký</h1>
        <?php  foreach($myCources as $mc):extract($mc); ?>   
        <div class="group">
            <div class="img">
                <img style="width:150px" src="public/images/<?=$avt_kh?>" alt="">
            </div>
            <div class="ten">
                <h1><?=$ten_khoa_hoc?></h1>
            </div>
            <div class="gia">
                <h1>$ <?=$tien_hoc?></h1>
            </div>
            <div class="gv">
                <h2><?=$ma_giang_vien?></h2>
            </div>
            <div class="thaotac">
                <button class="btn btn-primary"><?=$ten_trang_thai?></button>
                <?php if($id_trang_thai == 1){?>
                    <button id="btnz" class="btn btn-outline-primary"><a href="index.php?redirect=huydangky&table=dang_ky_khoa_hoc&id=id_dang_ky_khoa_hoc&iddl=<?=$id_dang_ky_khoa_hoc?>">Hủy đăng ký</a></button>
                    <?php } else if($trang_thai == 2){?> 
                    <button class="btn btn-outline-primary" disabled>Hủy đăng ký</button>
                    <?php }else{
                        $checkdg = checkdanhgia();
                        if(empty($checkdg)){
                            include("app/views/Client/chucnangphu/danhgia.php");
                        }else{
                            echo "Cảm ơn đã đánh giá";
                        }
                        }?>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <style>
        .group{
            border: 1px solid;
        }
        #btnz:hover{
            background-color: red;
        }
    </style>
</body>
</html>