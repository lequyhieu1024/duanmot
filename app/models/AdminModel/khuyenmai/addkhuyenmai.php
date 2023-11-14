<?php
if (isset($_POST["addkhuyenmai"])) {
    $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
    $ngay_bat_dau = $_POST['ngay_bat_dau'];
    $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
    $noi_dung = $_POST['noi_dung'];
    $sql = "INSERT INTO khuyen_mai(ngay_ket_thuc,ten_khuyen_mai,ngay_bat_dau,noi_dung) VALUES ('$ngay_ket_thuc','$ten_khuyen_mai','$ngay_bat_dau','$noi_dung')";
    pdo_execute($sql);
    header("location:index.php?act=allkhuyenmai&table=khuyen_mai");
}
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm khuyến mãi</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khuyến mãi</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="ten_khuyen_mai" placeholder="Tên khuyến mãi">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày bắt đầu chương trình khuyến mại</label>
                <input type="date" class="form-control" required name="ngay_bat_dau" id="exampleInputPassword1" placeholder="Ngày bắt đầu">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày kết thúc chương trình khuyến mại</label>
                <input type="date" class="form-control" required name="ngay_ket_thuc" id="exampleInputPassword1" placeholder="Ngày kết thúc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nội dung</label>
                <input type="number" class="form-control" required name="noi_dung" id="exampleInputPassword1" placeholder="% Khuyến Mãi">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addkhuyenmai" class="btn btn-primary">Thêm khuyến mãi</button>
        </div>
    </form>
</div>