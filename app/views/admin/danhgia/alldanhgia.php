
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
            <th scope="col">ID Đánh Giá</th>
            <th scope="col">Tên Tài Khoản</th>
            <th scope="col">Tên Khóa Học</th>
            <th scope="col">Đánh Giá</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $binhluan = all_danh_gia();
        foreach($binhluan as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_danh_gia ?></th>
            <td><?=$ten_tai_khoan ?></td>
            <td><?=$ten_khoa_hoc ?></td>      
            <td><?=$danh_gia ?></td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>