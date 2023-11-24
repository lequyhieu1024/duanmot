
<?php 
    $editdm = select_all_table_fetch_one();
    extract($editdm);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa danh mục</h3>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="hidden" class="form-control" value="<?=$id_danh_muc ?>" required id="exampleInputEmail1" name="id_danh_muc" placeholder="Tên danh mục">
                <input type="text" class="form-control" value="<?=$ten_danh_muc ?>" required id="exampleInputEmail1" name="ten_danh_muc" placeholder="Tên danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả danh mục</label>
                <input type="text" class="form-control" value="<?=$mo_ta ?>" required name="mo_ta" id="exampleInputPassword1" placeholder="Mô tả danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="<?=$trang_thai?>"><?=$trang_thai?>(hiện tại)</option>
                    <option value="show">Show</option>
                    <option value="none">None</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh</label>
                <input type="file" class="form-control" name="avt" id="exampleInputPassword1">               
            </div>
            <img style="width:100px" src="../../../public/images/<?=$avt?>" alt="">
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="editdanhmuc" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>