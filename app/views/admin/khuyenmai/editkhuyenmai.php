
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm khuyến mãi</h3>
    </div>
    <?php 
        $km = select_all_table_fetch_one();
        extract($km);
    ?>
    <form method="post">
        <div class="card-body">
                <input type="hidden" class="form-control" required id="exampleInputEmail1" value="<?=$id_khuyen_mai?>" name="id_khuyen_mai" >
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khuyến mãi</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" value="<?=$ten_khuyen_mai?>" name="ten_khuyen_mai" placeholder="Tên khuyến mãi">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày bắt đầu chương trình khuyến mại</label>
                <input type="date" class="form-control" required name="ngay_bat_dau" value="<?=$ngay_bat_dau?>" id="exampleInputPassword1" placeholder="Ngày bắt đầu">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày kết thúc chương trình khuyến mại</label>
                <input type="date" class="form-control" required name="ngay_ket_thuc" value="<?=$ngay_ket_thuc?>" id="exampleInputPassword1" placeholder="Ngày kết thúc">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nội dung</label>
                <input type="number" class="form-control" required name="noi_dung" id="exampleInputPassword1" value="<?=$noi_dung?>" placeholder="% Khuyến Mãi">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="editkhuyenmai" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>