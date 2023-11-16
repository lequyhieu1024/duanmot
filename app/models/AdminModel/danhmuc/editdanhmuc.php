<?php
if (isset($_POST["editdanhmuc"])) {
    $id_danh_muc = $_POST['id_danh_muc'];
    $trang_thai = $_POST['trang_thai'];
    $mo_ta = $_POST['mo_ta'];
    $ten_danh_muc = $_POST['ten_danh_muc'];
    $sql = "UPDATE danh_muc_khoa_hoc SET id_danh_muc='$id_danh_muc', ten_danh_muc='$ten_danh_muc',mo_ta='$mo_ta',trang_thai='$trang_thai' WHERE id_danh_muc = '$id_danh_muc'";
    pdo_execute($sql);
    header("location:index.php?act=alldanhmuc&table=danh_muc_khoa_hoc");
}
?>
<?php 
    $editdm = select_all_table_fetch_one();
    extract($editdm);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa danh mục</h3>
    </div>
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="hidden" class="form-control" value="<?=$id_danh_muc ?>" required id="exampleInputEmail1" name="id_danh_muc" placeholder="Tên danh mục">
                <input type="text" class="form-control" value="<?=$ten_danh_muc ?>" required id="exampleInputEmail1" name="ten_danh_muc" placeholder="Tên danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả danh mục</label>
                <input type="text" class="form-control" value="<?=$mo_ta ?>" required name="mo_ta" id="exampleInputPassword1" placeholder="Mô tả danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="<?=$trang_thai?>"><?=$trang_thai?>(hiện tại)</option>
                    <option value="show">Show</option>
                    <option value="none">None</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="editdanhmuc" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>