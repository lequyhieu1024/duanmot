

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
            <th scope="col">ID Tài Khoản</th>
            <th scope="col">Tên Tài Khoản</th>
            <th scope="col">Họ Và Tên</th>
            <th scope="col">Avt</th>
            <th scope="col">Email</th>
            <th scope="col">Năm Sinh</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = select_all_table();
        foreach ($result as $row):
            extract($row);?>
        <tr>
            <th scope="col"><?=$id_tai_khoan?></th>
            <th scope="col"><?=$ten_tai_khoan?></th>
            <th scope="col"><?=$ho_va_ten?></th>
            <th scope="col"><img style="width:100px;height:80%;" src="../../../public/images/<?=$avt?>" alt=""></th>
            <th scope="col"><?=$email?></th>
            <th scope="col"><?=$nam_sinh ?></th>
            <th scope="col"><?=$mat_khau?></th>
            <th scope="col"><?=$so_dien_thoai?></th>
            <td><?=$id_role ?></td> 
            <td><a href="index.php?act=edittaikhoan&table=tai_khoan&id=id_tai_khoan&id_edit=<?=$id_tai_khoan ?>"><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=alltaikhoan&id=id_tai_khoan&table=tai_khoan&iddl=<?=$id_tai_khoan;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>