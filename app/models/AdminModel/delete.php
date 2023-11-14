
<?php
    delete(); 
    $header = $_GET['header'];
    $table = $_GET['table'];
    header("location:index.php?act=$header&table=$table");
    ECHO '<script>alert("Xóa thành công")</script>'
?>
