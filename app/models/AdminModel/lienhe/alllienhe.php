
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
        <th scope="col">Mã liên hệ</th>
            <th scope="col">Nội dung liên hệ</th>
            <th scope="col">Ngày liên hệ</th>
            <th scope="col">Người liên hệ</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $alllienhe = select_all_table();
        foreach($alllienhe as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_lien_he ?></th>
            <td><?=$noi_dung ?></td>
            <td><?=$ngay_lien_he ?></td>    
            <td><?=$id_tai_khoan ?></td>    
            <td>
                <a href="index.php?act=delete&id=id_lien_he&iddl=<?=$id_lien_he?>&table=lien_he&header=alllienhe"><button class="btn btn-danger">Xóa</button></a>    
                <a href=""><button class="btn btn-danger">Phản Hồi</button></a></td>       
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>