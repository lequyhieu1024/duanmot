
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cập nhật tài khoản</h3>
    </div>
    <?php 
        $edittk = select_all_table_fetch_one();
        extract($edittk);
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <input type="hidden" class="form-control" required value="<?=$id_tai_khoan?>" name="id_tai_khoan" id="exampleInputPassword1" placeholder="Tên tài khoản">
            <div class="form-group">
                <label for="exampleInputPassword1">Tên tài khoản</label>
                <input type="text" class="form-control" required value="<?=$ten_tai_khoan?>" name="ten_tai_khoan" id="exampleInputPassword1" placeholder="Tên tài khoản">
            </div>
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
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="text" class="form-control" required value="<?=$mat_khau?>" id="exampleInputEmail1" name="mat_khau" placeholder="Năm sinh tài khoản">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Avatar</label>
                <input type="file" class="form-control" required id="exampleInputEmail1" name="avt" placeholder="Ảnh đại diện tài khoản">
            </div>
            ảnh hiện tại: <img style="width:100px;height:80%;" src="../../../public/images/<?=$avt?>" alt="">
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="form-control" required value="<?=$so_dien_thoai?>" id="exampleInputEmail1" name="so_dien_thoai" placeholder="Số điện thoại tài khoản">
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
            <button type="submit" name="edittaikhoan" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>