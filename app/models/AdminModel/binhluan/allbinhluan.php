
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
            <th scope="col">Mã Bình Luận</th>
            <th scope="col">Tên Tài Khoản Bình Luận</th>
            <th scope="col">Mã Khóa Học Được Bình Luận</th>
            <th scope="col">Nội Dung</th>
            <th scope="col">Ngày Bình Luận</th>
            <th scope="col">Đánh Giá</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $binhluan = select_all_table();
        foreach($binhluan as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_binh_luan ?></th>
            <td><?=$id_tai_khoan ?></td>
            <td><?=$id_khoa_hoc ?></td>
            <td><?=$noi_dung_binh_luan ?></td>       
            <td><?=$ngay_binh_luan ?></td>       
            <td><?=$danh_gia ?></td>       
            <td><a href="index.php?act=delete&header=allbinhluan&id=id_binh_luan&table=binh_luan&iddl=<?=$id_binh_luan;?>"><button class="btn btn-danger">Xóa</button></a></td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>