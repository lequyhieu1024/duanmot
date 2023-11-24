
<?php 
    $editdm = select_all_table_fetch_one();
    extract($editdm);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa danh mục</h3>
    </div>
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Lộ Trình Học</label>
                <select name="id_lo_trinh" id="">
                    <?php $kh = alllotrinh();
                    foreach($kh as $rows):extract($rows)?>
                    <option value="<?=$id_lo_trinh?>"><?=$thoi_gian?></option>
                    <?php endforeach?>
                </select>
                <input type="hidden" class="form-control" value="<?=$id_lo_trinh_khoa_hoc ?>" name="id_lo_trinh_khoa_hoc">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ID khóa học</label>
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
            <button type="submit" name="editltkh" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>