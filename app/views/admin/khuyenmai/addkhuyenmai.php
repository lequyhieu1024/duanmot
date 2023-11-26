
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm khuyến mãi</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh</label>
                <input type="file" class="form-control" required name="avt" id="exampleInputPassword1">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addkhuyenmai" class="btn btn-primary">Thêm khuyến mãi</button>
        </div>
    </form>
</div>