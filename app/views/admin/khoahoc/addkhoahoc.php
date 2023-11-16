<?php
if (isset($_POST["addkhoahoc"])) {
    $trang_thai = $_POST['trang_thai'];
    $mo_ta = $_POST['mo_ta'];
    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
    if($_FILES['avt']['name'] != ""){
        $avt = basename($_FILES["avt"]["name"]);
        $target_dir = "../../../public/images/";
        $target_file = $target_dir . $avt;
        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
    }else{
        $avt ="";
    }
    $tien_hoc = $_POST['tien_hoc'];
    $id_giang_vien = $_POST['id_giang_vien'];
    $id_danh_muc = $_POST['id_danh_muc'];
    $slideshow = $_POST['slideshow'];
    $sql = "INSERT INTO khoa_hoc(ten_khoa_hoc, avt, tien_hoc, mo_ta, trang_thai, id_giang_vien, id_danh_muc, slideshow) VALUES ('$ten_khoa_hoc','$avt','$tien_hoc','$mo_ta','$trang_thai','$id_giang_vien','$id_danh_muc','$slideshow')";
    pdo_execute($sql);
    header("location:index.php?act=allkhoahoc&table=khoa_hoc");
}

?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm Khóa Học</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khóa học</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="ten_khoa_hoc" placeholder="Tên khóa học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tiền học</label>
                <input type="number" class="form-control" name="tien_hoc" required id="exampleInputPassword1" placeholder="Tiền học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh đại diện</label>
                <input type="file" class="form-control" name="avt" id="exampleInputPassword1" placeholder="ảnh đại diện khóa học">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="mo_ta" placeholder="Mô tả khóa học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="yes">Lớp còn nhận học viên</option>
                    <option value="no">Lớp không còn nhận học viên</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giảng viên</label>
                <select name="id_giang_vien" id="">
                    <?php
                        $gv = giang_vien();
                        foreach($gv as $row):
                        extract($row);?>
                        <option value="<?=$id_giang_vien;?>"><?=$ma_giang_vien;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Danh Mục</label>
                <select name="id_danh_muc" id="">
                    <?php
                        $danhmuc = danh_muc();
                        foreach($danhmuc as $row):
                        extract($row);?>
                        <option value="<?=$id_danh_muc;?>"><?=$ten_danh_muc;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Show slide</label>
                <select name="slideshow" id="">
                    <option value="show">Show</option>
                    <option value="none">None</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addkhoahoc" class="btn btn-primary">Thêm danh mục</button>
        </div>
    </form>
</div>