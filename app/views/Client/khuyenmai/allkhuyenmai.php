
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .big-ctn{
            margin-top: 50px;
            margin-left: 20px;
        }
        .big-ctn-wrapper{
            display:grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            grid-gap:20px;
        }
        .container-km{
            width:580px;
            border: 1px solid #BDBDBD;
            display:grid;
            grid-template-columns:1fr 1.5fr;
            margin-bottom:10px;
            box-shadow: 0 0 10px gray;
        }
    </style>
</head>
<body>
    <div class="big-ctn">
        <h1>Khuyến mãi hiện có </h1>
        <div class="big-ctn-wrapper">
            <?php 
            $km = khuyen_mai();
            foreach($km as $ctkm):
            extract($ctkm);?>
                <div class="container-km">
                    <div class="content-left-km">
                        <img style="width:200px;height:150px" class="img-fluid" src="public/images/<?=$avt?>" alt="">
                    </div>
                    <div class="content-right-km">
                        <h1><?=$ten_khuyen_mai?></h1>
                        <h2>Giảm tối đa: <?=$noi_dung?>%</h2>
                        <p>Ngày bắt đầu: <?=$ngay_bat_dau?></p>
                        <p>Giảm kết thúc: <?=$ngay_ket_thuc?></p>
                    </div>
                </div>
            <?php endforeach?>
        </div> 
    </div>
</body>
</html>