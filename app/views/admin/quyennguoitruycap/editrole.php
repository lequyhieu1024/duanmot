
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
    </div>
    <?php 
        $role = select_all_table_fetch_one();
        extract($role);
    ?>
    <form method="post">
        <div class="card-body">
            <input type="hidden" class="form-control" required value="<?=$id_role?>" name="id_role" id="exampleInputPassword1" placeholder="Tên Quyền">
            <div class="form-group">
                <label for="exampleInputPassword1">Tên quyền</label>
                <input type="text" class="form-control" required value="<?=$name_role?>" name="name_role" id="exampleInputPassword1" placeholder="Tên Quyền">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Quyền Người Truy Cập </label>
                <input type="text" class="form-control" required value="<?=$mo_ta?>" name="mo_ta" id="exampleInputPassword1" placeholder="Các quyền sẽ có">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="editrole" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>