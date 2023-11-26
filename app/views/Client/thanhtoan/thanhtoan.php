
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <style>
        .tttt{
            margin-top: 100px;
        }
        .thongtinthanhtoan{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
        }
        .tthv{
            padding: 10px;
        }
        .tttt label{
            color:red;
            font-size: large;
            font-weight: 600;
        }
        .thongtinthanhtoan input{
            width: 450px;
        }
    </style>
</head>
<body>
    <div class="tttt">
        <form class="thongtinthanhtoan" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
        action="init_payment.php" class="form-group">
            <div class="tthv">
                <h2>(*) Thông tin học viên</h2>
                    <label for="">Họ Và Tên</label> <br>
                    <input type="text" name="ho_va_ten" placeholder="Họ và tên" id="" value="<?=$ho_va_ten?>"><br>
                    <label for="">Số Điện Thoại</label><br>
                    <input type="number" name="so_dien_thoai" placeholder="Số điện thoại người học" id="" value="<?=$so_dien_thoai?>"><br>
                    <label for="">Email</label><br>
                    <input type="email" name="email" placeholder="Email người học" id="" value="<?=$email?>"><br>
               
            </div>
            <div class="thongtindonhang">
                <?php 
                $ttkh = select_all_table_fetch_one();
                extract($ttkh);
                ?>
                <label for="">Khóa học:</label>
                <h3><?=$ten_khoa_hoc?></h3>
                <label for="">Tiền học:</label>
                <h3>$ <?=$tien_hoc?></h3>
                <label for="">Chọn Lộ trình học:</label>
                <select name="lo_trinh_hoc" id="">
                    <?php $lt = lotrinh();
                    foreach ($lt as $row): extract($row);?>
                    <option value="<?=$id_lo_trinh?>"><?=$thoi_gian?></option>
                    <?php endforeach?>
                </select>
                <label for="">Khuyến mãi:</label>
                <select name="khuyen_mai" id="khuyen_mai_select" onchange="calculateTotal()">
                    <option value="0">Không áp dụng khuyến mãi</option>

                    <?php 
                    $km = khuyen_mai();
                    foreach($km as $ctkm):
                        extract($ctkm);?>
                    <option value="<?=$id_khuyen_mai?>"><?=$ten_khuyen_mai?></option>
                    <?php endforeach ?>
                </select><br>
                <label for="">Thành tiền:</label>
                <h2 id="thanh_tien"> </h2><br>
                <h3>(*) Phương thức thanh toán</h3>
                <input class="btn btn-danger" type="submit" name="momo" value="Thanh toán MOMO">
            </div>
        </form>
    </div>
    <script>
        document.getElementById("khuyen_mai_select").value = 0;
        calculateTotal();

        function calculateTotal() {
            var selectedKhuyenMai = document.getElementById("khuyen_mai_select").value;
            if (selectedKhuyenMai == 0) {
                document.getElementById("thanh_tien").innerHTML = <?php echo json_encode($tien_hoc); ?>;
                return;
            }
            var discountPercentage = getDiscountPercentage(selectedKhuyenMai);
            var originalTienHoc = <?php echo json_encode($tien_hoc); ?>;
            var discountedTotal = originalTienHoc - (originalTienHoc * discountPercentage / 100);
            document.getElementById("thanh_tien").innerHTML = discountedTotal.toFixed(0);
        }

        function getDiscountPercentage(selectedKhuyenMai) {
            <?php 
            $km = khuyen_mai();
            ?>
            <?php foreach($km as $ctkm): ?>
                if (<?php echo json_encode($ctkm['id_khuyen_mai']); ?> == selectedKhuyenMai) {
                    return <?php echo json_encode($ctkm['noi_dung']); ?>;
                }
            <?php endforeach ?>

            return 0;
        }
    </script>

</script>

</body>
</html>

