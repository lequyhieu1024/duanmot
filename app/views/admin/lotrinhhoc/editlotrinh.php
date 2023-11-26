
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
                <input type="text" class="form-control" value="<?=$thoi_gian ?>" required id="exampleInputEmail1" name="thoi_gian" placeholder="Thời gian">
                <input type="hidden" class="form-control" value="<?=$id_lo_trinh ?>" name="id_lo_trinh">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="editlotrinh" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>