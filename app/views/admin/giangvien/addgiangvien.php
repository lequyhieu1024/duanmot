
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm giảng viên</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã giảng viên</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="ma_giang_vien" placeholder="Mã giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên giảng viên</label>
                <input type="text" class="form-control" required name="ten_giang_vien" id="exampleInputPassword1" placeholder="Tên giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="email" placeholder="Email giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Avatar</label>
                <input type="file" class="form-control" required id="exampleInputEmail1" name="avt" placeholder="Ảnh đại diện giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="so_dien_thoai" placeholder="Số điện thoại giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="mo_ta" placeholder="Kinh nghiệm giảng viên">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Năm sinh</label>
                <input type="date" class="form-control" required id="exampleInputEmail1" name="nam_sinh" placeholder="Năm sinh của giảng viên">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addgiangvien" class="btn btn-primary">Thêm giảng viên</button>
        </div>
    </form>
</div>