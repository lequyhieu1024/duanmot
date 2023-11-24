
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
            <th scope="col">ID Lộ Trình Khóa Học</th>
            <th scope="col">ID Khóa Học</th>
            <th scope="col">ID Lộ Trình</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $danhmuc = allltkh();
        foreach($danhmuc as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_ltkh ?></th>
            <td><?=$ten_khoa_hoc ?></td>   
            <td><?=$thoi_gian ?></td>   
            <td><a href="index.php?act=editltkh&id=id_lo_trinh_khoa_hoc&table=lo_trinh_khoa_hoc&id_edit=<?=$id_ltkh?>"><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=allltkh&id=id_lo_trinh_khoa_hoc&table=lo_trinh_khoa_hoc&iddl=<?=$id_ltkh;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>