
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cập nhật thông tin cá nhân</h3>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <input type="hidden" class="form-control" required value="<?=$id_tai_khoan?>" name="id_tai_khoan" id="exampleInputPassword1">
            <div class="form-group">
                <label for="exampleInputPassword1">Họ Và Tên</label>
                <input type="text" class="form-control" required value="<?=$ho_va_ten?>" name="ho_va_ten" id="exampleInputPassword1" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" required value="<?=$email?>" id="exampleInputEmail1" name="email" placeholder="Email tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Năm sinh</label>
                <input type="date" class="form-control" required value="<?=$nam_sinh?>" id="exampleInputEmail1" name="nam_sinh" placeholder="Năm sinh tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Avatar</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="avt" style="height: 70px;">
            </div>
            Ảnh hiện tại: <img style="width:100px;height:80%;" src="public/images/<?=$avt?>" alt="">
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="form-control" required value="<?=$so_dien_thoai?>" id="exampleInputEmail1" name="so_dien_thoai" placeholder="Số điện thoại tài khoản">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="changemyinfo" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>