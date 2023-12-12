<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-12 mt-3">
        <div class="col-lg-12 mt-3">
            <form action="index.php?act=lockhoahoc" method="post">
                <select style="height:35px;width:200px;border: 1px solid #666;background-color:yellow " name="lockhoahoc" id="">
                    <option value="0" disabled selected hidden><h2>------Lọc trạng thái------</h2></option>
                    <option value="1">Chờ xác nhận</option>
                    <option value="2">Đang chờ xử lý</option>
                    <option value="3">Đăng ký thành công</option>
                </select>
                <input style="height:35px;width:60px;background-color:yellow; border: 1px solid #666;" name="loc" type="submit" value="OK">
            </form>
        </div>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Tên Khóa Học</th>
            <th scope="col">AVT</th>
            <th scope="col">Thành Tiền</th>
            <th scope="col">Người đăng ký</th>
            <th scope="col">Ngày đăng ký</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">email</th>
            <th scope="col">SĐT</th>
            <th scope="col">Ho Tên</th>
            <th scope="col">Lộ trình</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $khoahoc = QLkhdadangky();
        foreach($khoahoc as $row):
        extract($row); ?>
        <tr>
            <td><?=$ten_khoa_hoc ?></td>
            <td><img style="width:100px;height:80px" src="../../../public/images/<?=$avt_kh ?>" alt=""></td>
            <td><?=number_format($thanh_tien,0, ",") ?><br><br>
            PTTT: <br> <?php if($pttt == 1){
                        echo '<b class="text-danger">VNPAY</b>';
                    }else if($pttt == 3){
                        echo '<b class="text-danger">MOMO</b>';
                    }else{
                        echo '<b class="text-danger">Tiền mặt</b>';
                    }
                    ?>
            </td>
            <td><?=$ten_tai_khoan ?></td>
            <td><?=$ngay_dang_ky_hoc ?></td>
            <td><a href="index.php?act=edit_ql_kh_dadangky&table=dang_ky_khoa_hoc&id=id_dang_ky_khoa_hoc&id_edit=<?=$id_dang_ky_khoa_hoc;?>">
                <?php if($id_trang_thai_kh == 1){ ?> <button class="btn btn-warning"><?=$ten_trang_thai?>
                </button><?php }else if($id_trang_thai_kh == 2){?><button class="btn btn-primary"><?=$ten_trang_thai?>
                </button><?php }else{?><button class="btn btn-success"><?=$ten_trang_thai?></button><?php }?></a>
            </td>
            <td><?=$email_tk ?></td>  
            <td><?=$sdt_tk ?></td>  
            <td><?=$ho_va_ten_tk ?></td>  
            <td><?=$lt?></td>       
            <td>
                <a href="index.php?act=delete&header=qlkhdadangky&table=dang_ky_khoa_hoc&id=id_dang_ky_khoa_hoc&iddl=<?=$id_dang_ky_khoa_hoc;?>"><button style="margin-bottom: 10px;" class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>