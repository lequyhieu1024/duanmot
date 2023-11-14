<?php
if (isset($_POST["addtaikhoan"])) {
    $ten_tai_khoan = $_POST['ten_tai_khoan'];
    $email = $_POST['email'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $ho_va_ten = $_POST['ho_va_ten'];
    if($_FILES['avt']['name'] != ""){
        $avt = basename($_FILES["avt"]["name"]);
        $target_dir = "../../../public/images/";
        $target_file = $target_dir . $avt;
        move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file);  
    }else{
        $avt ="";
    }
    $nam_sinh = $_POST['nam_sinh'];
    $mo_ta = $_POST['mo_ta'];
    $id_role = $_POST['id_role'];
    $sql = "INSERT INTO tai_khoan(ten_tai_khoan,email,nam_sinh,avt,so_dien_thoai,id_role,ho_va_ten) VALUES ('$ten_tai_khoan','$email','$nam_sinh','$avt','$so_dien_thoai','$id_role','$ho_va_ten')";
    pdo_execute($sql);
    header("location:index.php?act=alltaikhoan&table=tai_khoan");
}
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm tài khoản</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Tên tài khoản</label>
                <input type="text" class="form-control" required name="ten_tai_khoan" id="exampleInputPassword1" placeholder="Tên tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Họ Và Tên</label>
                <input type="text" class="form-control" required name="ho_va_ten" id="exampleInputPassword1" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="email" placeholder="Email tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Năm sinh</label>
                <input type="date" class="form-control" required id="exampleInputEmail1" name="nam_sinh" placeholder="Năm sinh tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Avatar</label>
                <input type="file" class="form-control" required id="exampleInputEmail1" name="avt" placeholder="Ảnh đại diện tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="so_dien_thoai" placeholder="Số điện thoại tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên role</label>
                <select name="id_role" id="">
                    <?php
                        $idrole = role();
                        foreach($idrole as $row):
                        extract($row);?>
                        <option value="<?=$id_role;?>"><?=$name_role;?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addtaikhoan" class="btn btn-primary">Thêm tài khoản</button>
        </div>
    </form>
</div>