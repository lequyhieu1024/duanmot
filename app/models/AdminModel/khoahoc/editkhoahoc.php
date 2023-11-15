<?php
if (isset($_POST["editkhoahoc"])) {
    $trang_thai = $_POST['trang_thai'];
    $id_khoa_hoc = $_POST['id_khoa_hoc'];
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
    $sql = "UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc', id_khoa_hoc='$id_khoa_hoc', avt='$avt', tien_hoc='$tien_hoc', mo_ta='$mo_ta', trang_thai='$trang_thai', id_giang_vien='$id_giang_vien', id_danh_muc='$id_danh_muc', slideshow='$slideshow' WHERE id_khoa_hoc ='$id_khoa_hoc'";
    pdo_execute($sql);
    header("location:index.php?act=allkhoahoc&table=khoa_hoc");
}

?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa Khóa Học</h3>
    </div>
    <?php
        $editkh = select_all_table_fetch_one();
        extract($editkh); 
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khóa học</label>
                <input type="text" class="form-control"  id="exampleInputEmail1" required name="ten_khoa_hoc" value="<?=$ten_khoa_hoc;?>" placeholder="Tên khóa học">
                <input type="hidden" class="form-control" id="exampleInputEmail1" required value="<?=$id_khoa_hoc;?>" name="id_khoa_hoc" placeholder="Tên khóa học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tiền học</label>
                <input type="number" class="form-control" name="tien_hoc" value="<?=$tien_hoc;?>" required id="exampleInputPassword1" placeholder="Tiền học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh đại diện</label>
                <input type="file" class="form-control" name="avt" id="exampleInputPassword1" required placeholder="ảnh đại diện khóa học">
            </div>
            ảnh hiện tại<img style="width: 100px;height:80px;" src="../../../public/images/<?=$avt?>" alt="">
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" class="form-control" value="<?=$mo_ta;?>" id="exampleInputEmail1" required name="mo_ta" placeholder="Mô tả khóa học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="<?=$trang_thai;?>">Còn nhận học viên không : <?=$trang_thai;?></option>
                    <option value="yes">Lớp còn nhận học viên</option>
                    <option value="no">Lớp không còn nhận học viên</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giảng viên</label>
                <select name="id_giang_vien" id="">
                    <?php
                        $gvkh = giang_vien();
                        foreach($gvkh as $row):
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
            <button type="submit" name="editkhoahoc" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>