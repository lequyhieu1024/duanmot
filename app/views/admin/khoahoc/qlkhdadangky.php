<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID Đăng Ký Khóa Học</th>
            <th scope="col">Tên Khóa Học</th>
            <th scope="col">AVT</th>
            <th scope="col">Thành Tiền</th>
            <th scope="col">Người đăng ký</th>
            <th scope="col">Ngày đăng ký</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Mã giảng viên</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $khoahoc = QLkhdadangky();
        foreach($khoahoc as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_dang_ky_khoa_hoc ?></th>
            <td><?=$ten_khoa_hoc ?></td>
            <td><img style="width:100px;height:80px" src="../../../public/images/<?=$avt ?>" alt=""></td>
            <td><?=$thanh_tien ?></td>
            <td><?=$ten_tai_khoan ?></td>
            <td><?=$ngay_dang_ky_hoc ?></td>
            <td><?=$trang_thai ?></td>
            <td><?=$ma_giang_vien ?></td>  
            <td><?php if ($ten_khuyen_mai != ""): $ten_khuyen_mai ;else:echo "Không áp km";endif; ?></td>       
            <td><a href="index.php?act=editkhoahoc&table=khoa_hoc&id=id_khoa_hoc&id_edit=<?=$id_khoa_hoc;?>"><button style="margin-bottom: 10px;" class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=allkhoahoc&table=khoa_hoc&id=id_khoa_hoc&iddl=<?=$id_khoa_hoc;?>"><button style="margin-bottom: 10px;" class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>