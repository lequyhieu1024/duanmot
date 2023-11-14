<?php
if (isset($_POST["adddanhmuc"])) {
    $trang_thai = $_POST['trang_thai'];
    $mo_ta = $_POST['mo_ta'];
    $ten_danh_muc = $_POST['ten_danh_muc'];
    $sql = "INSERT INTO danh_muc_khoa_hoc(ten_danh_muc,trang_thai,mo_ta) VALUES ('$ten_danh_muc','$trang_thai','$mo_ta')";
    pdo_execute($sql);
    header("location:index.php?act=alldanhmuc&table=danh_muc_khoa_hoc");
}
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="ten_danh_muc" placeholder="Tên danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả danh mục</label>
                <input type="text" class="form-control" required name="mo_ta" id="exampleInputPassword1" placeholder="Mô tả danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="show">Show</option>
                    <option value="none">None</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="adddanhmuc" class="btn btn-primary">Thêm danh mục</button>
        </div>
    </form>
</div>