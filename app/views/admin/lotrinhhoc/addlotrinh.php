
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm lộ trình</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=addlotrinh" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Lộ trình học(thời gian :tháng)</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="thoi_gian" placeholder="Lộ trình học">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addlotrinh" class="btn btn-primary">Thêm lộ trình</button>
        </div>
    </form>
</div>