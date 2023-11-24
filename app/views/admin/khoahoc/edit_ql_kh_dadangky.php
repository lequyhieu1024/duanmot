<?php 
    $result = select_all_table_fetch_one();
    extract($result);
    ?>
    
    
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa trạng thái đăng ký khóa học</h3><br>
    </div>
    <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="<?=$trang_thai?>"><?=$trang_thai?></option>
                    <option value="Thanh toán thành công">Thanh toán thành công</option>
                    <option value="Chờ thanh toán">Chờ thanh toán</option>
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" name="edit_trangthai" class="btn btn-primary">Cập nhật</button>
            </div>
    </form>
</div>