<?php
if (isset($_POST["addrole"])) {
    $name_role = $_POST['name_role'];
    $mo_ta = $_POST['mo_ta'];
    $sql = "INSERT INTO role(name_role,mo_ta) VALUES ('$name_role','$mo_ta')";
    pdo_execute($sql);
    header("location:index.php?act=allrole&table=role");
}
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Tên quyền</label>
                <input type="text" class="form-control" required name="name_role" id="exampleInputPassword1" placeholder="Tên Quyền">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Quyền Người Truy Cập </label>
                <input type="text" class="form-control" required name="mo_ta" id="exampleInputPassword1" placeholder="Các quyền sẽ có">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addrole" class="btn btn-primary">Thêm quyền mới</button>
        </div>
    </form>
</div>