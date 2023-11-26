
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm lộ trình</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Lộ Trình</label>
                <select name="id_lo_trinh" id="">
                    <?php $kh = alllotrinh();
                    foreach($kh as $rows):extract($rows)?>
                    <option value="<?=$id_lo_trinh?>"><?=$thoi_gian?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Khóa học</label>
                <select name="id_khoa_hoc" id="">
                    <?php $kh = allkh();
                    foreach($kh as $rows):extract($rows)?>
                    <option value="<?=$id_khoa_hoc?>"><?=$ten_khoa_hoc?></option>
                    <?php endforeach?>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addltkh" class="btn btn-primary">Thêm lộ trình</button>
        </div>
    </form>
</div>