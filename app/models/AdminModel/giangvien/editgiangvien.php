<?php
if (isset($_POST["editgiangvien"])) {
    $id_giang_vien = $_POST['id_giang_vien'];
    $ma_giang_vien = $_POST['ma_giang_vien'];
    $ten_giang_vien = $_POST['ten_giang_vien'];
    $email = $_POST['email'];
    $nam_sinh = $_POST['nam_sinh'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    if($_FILES['avt']['name'] != ""){
        $avt = basename($_FILES["avt"]["name"]);
        $target_dir = "../../../public/images/";
        $target_file = $target_dir . $avt;
        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
    }else{
        $avt ="";
    }
    $mo_ta = $_POST['mo_ta'];
    $sql = "UPDATE giang_vien  SET `id_giang_vien`='$id_giang_vien',`ten_giang_vien`='$ten_giang_vien',`ma_giang_vien`='$ma_giang_vien',`email`='$email',`avt`='$avt',`so_dien_thoai`='$so_dien_thoai',`mo_ta`='$mo_ta',`nam_sinh`='$nam_sinh' WHERE id_giang_vien = '$id_giang_vien'";
    pdo_execute($sql);
    header("location:index.php?act=allgiangvien&table=giang_vien");
}
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm giảng viên</h3>
    </div>
    <?php 
        $id_giang_vien = $_GET['id_edit'];
        $editgv = select_all_table_fetch_one();
        extract($editgv);
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã giảng viên</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" value="<?=$ma_giang_vien?>" name="ma_giang_vien" placeholder="Mã giảng viên">
                <input type="hidden" class="form-control" required id="exampleInputEmail1" name="id_giang_vien" value="<?=$id_giang_vien?>" placeholder="Mã giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên giảng viên</label>
                <input type="text" class="form-control" required name="ten_giang_vien" id="exampleInputPassword1" value="<?=$ten_giang_vien?>" placeholder="Tên giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" value="<?=$email?>" required id="exampleInputEmail1" name="email" placeholder="Email giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Avatar</label>
                <input type="file" class="form-control" required id="exampleInputEmail1" name="avt" placeholder="Ảnh đại diện giảng viên">
                ảnh hiện tại: <img style="width: 100px;height:80px;" src="../../../public/images/<?=$avt?>" alt="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="number" class="form-control" value="<?=$so_dien_thoai?>" required id="exampleInputEmail1" name="so_dien_thoai" placeholder="Số điện thoại giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" class="form-control" required value="<?=$mo_ta?>" id="exampleInputEmail1" name="mo_ta" placeholder="Kinh nghiệm giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Năm sinh</label>
                <input type="date" class="form-control" required id="exampleInputEmail1" value="<?=$nam_sinh?>" name="nam_sinh" placeholder="Năm sinh của giảng viên">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="editgiangvien" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>