
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <style>
        .tttt{
            margin-top: 100px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .tttt h1{
            color:blue;
        }
        .thongtinthanhtoan{
            display: grid;
            grid-template-columns: 2fr 3fr;
            grid-gap: 10px;
        }
        .tttt label{
            color:red;
            font-size: large;
            font-weight: 600;
        }
        .thongtinthanhtoan input{
            width: 450px;
        }
        .phuongthucthanhtoan{
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="tttt">
        <p> * Kiểm tra kĩ mục 1 , 2, 3 trước khi chọn "Tiếp tục"</p>
        <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
        action="init_payment.php" class="form-group">
            <div class="thongtinthanhtoan">
                <div class="tthv">
                    <h1> 1 / Thông tin học viên</h1>
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
                    <h1>2 / Thông tin thanh toán</h1>
                    <table class="table table-bordered">
                        <tr>
                            <td>Khóa học</td>
                            <td><?=$ten_khoa_hoc?></td>
                        </tr>
                        <tr>
                            <td>Tiền học</td>
                            <td>$ <?=$tien_hoc?></td>
                        </tr>
                        <tr>
                            <td>Khuyến mại</td>
                            <td>  
                                <select name="khuyen_mai" id="khuyen_mai_select" onchange="calculateTotal()">
                                    <option value="0">Không áp dụng khuyến mãi</option>

                                    <?php 
                                    $km = khuyen_mai();
                                    foreach($km as $ctkm):
                                        extract($ctkm);?>
                                    <option value="<?=$id_khuyen_mai?>"><?=$ten_khuyen_mai?></option>
                                    <?php endforeach ?>
                                </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Thành tiền</td>
                            <td><h2 id="thanh_tien"> </h2></td>
                        </tr>
                    </table>
                </div>
            </div><br>
            <div class="phuongthucthanhtoan">
                <h1>3 / Phương thức thanh toán</h1>
                <input type="radio" name="pttt" checked value="1"> Thanh toán Online qua MOMO <br>
                <input type="radio" name="pttt" value="2"> Thanh toán sau
            </div><br>
            <div class="tieptuc text-center">
                <button name="thanhtoan" class="btn btn-danger" type="submit">Tiếp tục</button>
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

