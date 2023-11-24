<?php 
function register($ten_tai_khoan,$email,$mat_khau,$id_role) {
    $sql = "INSERT INTO tai_khoan(ten_tai_khoan, email, mat_khau,id_role) VALUES ('$ten_tai_khoan','$email','$mat_khau','$id_role')";
    pdo_execute($sql);
}
function login($ten_tai_khoan,$mat_khau) {
    $sql = "SELECT * FROM tai_khoan WHERE ten_tai_khoan='$ten_tai_khoan' AND mat_khau = '$mat_khau'";
    $result = pdo_query_one($sql);
    if($result ==true){
        $_SESSION['ten_tai_khoan'] = $result['ten_tai_khoan'];
        $_SESSION['id_role'] = $result['id_role'];
        $_SESSION['id_tai_khoan'] = $result['id_tai_khoan'];
        if(isset($_POST['remember'])){
            setcookie('remember', $mat_khau, time()+60*60*24*365,"/") ;
        }
        header('location:index.php');
    }else{
        echo '<script>alert("Sai thông tin đăng nhập")</script>';
        echo '<script>window.location.href= "app/views/client/taikhoan/login.php"</script>';
    }
}
function checkRegister() {
    $sql = "SELECT ten_tai_khoan FROM tai_khoan";
    $result = pdo_query($sql);
    return $result;
}
function myInfo(){
    if(isset($_SESSION['id_tai_khoan'])){
        $id_tai_khoan = $_SESSION['id_tai_khoan'];
        $sql = "SELECT * FROM tai_khoan WHERE id_tai_khoan = '$id_tai_khoan'";
        $result = pdo_query($sql);
        return $result;
    }
}