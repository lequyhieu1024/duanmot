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
        function thongke_khoahoc(){
                $sql = "SELECT 
                            khoa_hoc.id_khoa_hoc,
                            khoa_hoc.id_danh_muc,
                            ten_danh_muc, 
                            COUNT(*) as so_luong_khoahoc, 
                            SUM(tien_hoc) as tong_tien_dm,
                            MIN(tien_hoc) as gia_re_nhat,
                            MAX(tien_hoc) as gia_dat_nhat
                        FROM 
                            khoa_hoc
                            JOIN danh_muc_khoa_hoc ON danh_muc_khoa_hoc.id_danh_muc = khoa_hoc.id_danh_muc
                        GROUP BY 
                        danh_muc_khoa_hoc.id_danh_muc";
            
                $result = pdo_query($sql);
                return $result;
            }
            
            
?>