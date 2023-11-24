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
                    <?php
                    $tt = QLkhdadangky();
                    foreach($tt as $rows):extract($rows)?>
                    <option value="<?=$id_trang_thai?>"><?=$ten_trang_thai?>(Now)</option>
                    <?php endforeach;?>
                    <?php
                    $trang_thai = trang_thai();
                    foreach($trang_thai as $rows):extract($rows)?>
                    <option value="<?=$id_trang_thai?>"><?=$ten_trang_thai?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" name="edit_trangthai" class="btn btn-primary">Cập nhật</button>
            </div>
    </form>
</div>