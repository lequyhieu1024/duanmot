
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
            <th scope="col">Mã Khóa Học</th>
            <th scope="col">Tên Khóa Học</th>
            <th scope="col">AVT</th>
            <th scope="col">Tiền Học</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Số Lượt Xem</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Mã Giảng Viên</th>
            <th scope="col">Mã Danh Mục</th>
            <th scope="col">Slideshow</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $kh_theo_dm = kh_theo_dm();
        foreach($kh_theo_dm as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_khoa_hoc ?></th>
            <td><?=$ten_khoa_hoc ?></td>
            <td><img style="width: 100px;height:80px" src="../../../public/images/<?=$avt ?>" alt=""></td>
            <td><?=$tien_hoc ?></td>
            <td><?=$mo_ta ?></td>
            <td><?=$so_luot_xem ?></td>
            <td><?=$trang_thai ?></td>
            <td><?=$id_giang_vien ?></td>
            <td><?=$id_danh_muc ?></td>       
            <td><?=$slideshow ?></td> 
            <td><a href=""><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&id_danh_muc=<?=$id_danh_muc;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>