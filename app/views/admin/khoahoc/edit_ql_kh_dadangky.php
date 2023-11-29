<?php 
    $result = select_all_table_fetch_one();
    extract($result);
    ?>
    
<style>
    .updatettkh select{
        height: 30px;
    }
</style>
<div class="card card-primary col-6">
    <div class="card-header">
        <h3 class="card-title">Sửa trạng thái đăng ký khóa học</h3><br>
    </div><br>
    <form method="post">
            <div class="form-group updatettkh">
                <label for="exampleInputEmail1">Trạng thái</label>
                <select name="trang_thai" id="trang_thai_select">
                    <?php
                    $tt = chitietkhcuatoi($id_dang_ky_khoa_hoc);
                    foreach($tt as $rows):extract($rows)?>
                    <option value="<?=$id_trang_thai?>">-----Cập nhật------</option>
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
<script>
    var trangThaiSelect = document.getElementById("trang_thai_select");

    trangThaiSelect.addEventListener("change", function() {
        var selectedOption = trangThaiSelect.options[trangThaiSelect.selectedIndex];
        var selectedValue = selectedOption.value;

        // Ẩn tùy chọn có giá trị là 1 và 2 nếu giá trị được chọn là 3
        if (selectedValue === "3") {
            hideOptions(["1", "2"]);
        }

        // Ẩn tùy chọn có giá trị là 1 nếu giá trị được chọn là 2
        if (selectedValue === "2") {
            hideOptions(["1"]);
        }
    });

    // Hàm ẩn tùy chọn
    function hideOptions(optionsToHide) {
        optionsToHide.forEach(function(optionValue) {
            var optionToHide = trangThaiSelect.querySelector('option[value="' + optionValue + '"]');
            if (optionToHide) {
                optionToHide.style.display = "none";
            }
        });
        
        // Hiển thị lại tất cả các tùy chọn nếu giá trị chọn không phải là 2 hoặc 3
        trangThaiSelect.querySelectorAll('option').forEach(function(option) {
            if (!optionsToHide.includes(option.value)) {
                option.style.display = "";
            }
        });
    }

    // Kiểm tra trạng thái ban đầu
    trangThaiSelect.dispatchEvent(new Event("change"));
</script>
