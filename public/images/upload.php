<?php
$target_dir = "uploads/"; // Đường dẫn thư mục lưu trữ tệp tải lên
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // Đường dẫn đầy đủ của tệp tải lên
$uploadOk = 1; // Biến kiểm tra lỗi

// Kiểm tra xem tệp đã tồn tại chưa
if (file_exists($target_file)) {
    echo "Tệp đã tồn tại.";
    $uploadOk = 0;
}

// Kiểm tra kích thước tệp
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Tệp quá lớn.";
    $uploadOk = 0;
}

// Cho phép các định dạng tệp cụ thể
$allowedExtensions = array("jpg", "png", "jpeg", "gif");
$fileExtension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (!in_array($fileExtension, $allowedExtensions)) {
    echo "Chỉ được phép tải lên các tệp hình ảnh.";
    $uploadOk = 0;
}

// Kiểm tra nếu $uploadOk = 0
if ($uploadOk == 0) {
    echo "Tệp của bạn không được tải lên.";

// Nếu mọi thứ đều ổn, cố gắng tải lên tệp
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Tệp " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã được tải lên thành công.";
    } else {
        echo "Đã xảy ra lỗi khi tải lên tệp.";
    }
}
?>
