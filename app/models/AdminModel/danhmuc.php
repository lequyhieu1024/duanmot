<?php 
        function adddanhmuc($ten_danh_muc,$mo_ta,$avt,$trang_thai) {
                $sql = "INSERT INTO danh_muc_khoa_hoc(ten_danh_muc,mo_ta,avt,trang_thai) VALUES ('$ten_danh_muc','$mo_ta','$avt','$trang_thai')";
                pdo_execute($sql);
        }
        function editdanhmuc($id_danh_muc,$ten_danh_muc,$mo_ta,$avt,$trang_thai) {
                if($avt !=""){
                        $sql = "UPDATE danh_muc_khoa_hoc SET id_danh_muc='$id_danh_muc', ten_danh_muc='$ten_danh_muc',mo_ta='$mo_ta',avt='$avt',trang_thai='$trang_thai' WHERE id_danh_muc = '$id_danh_muc'";
                }else{   
                        $sql = "UPDATE danh_muc_khoa_hoc SET id_danh_muc='$id_danh_muc', ten_danh_muc='$ten_danh_muc',mo_ta='$mo_ta',trang_thai='$trang_thai' WHERE id_danh_muc = '$id_danh_muc'";
                }
                pdo_execute($sql);
        }
            
?>