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
function checkRegister($ten_tai_khoan,$email) {
    $sql = "SELECT ten_tai_khoan,email FROM tai_khoan WHERE email = '$email' and ten_tai_khoan = '$ten_tai_khoan'";
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
function changepassword($mat_khau_new,$id_tai_khoan){
    $sql = "UPDATE tai_khoan SET mat_khau = '$mat_khau_new' WHERE id_tai_khoan = '$id_tai_khoan'";
    pdo_execute($sql);
}
function checkpassword($id_tai_khoan){
    $sql = "SELECT mat_khau FROM tai_khoan WHERE id_tai_khoan = '$id_tai_khoan'";
    $result = pdo_query_one($sql);
    return $result;
}
function changeMyInfo($id_tai_khoan,$ho_va_ten,$email,$nam_sinh,$avt,$so_dien_thoai){
    if($avt != ""){
        $sql = "UPDATE tai_khoan SET ho_va_ten='$ho_va_ten',email='$email',nam_sinh='$nam_sinh',avt='$avt',so_dien_thoai='$so_dien_thoai' WHERE id_tai_khoan = $id_tai_khoan";
    }else{
        $sql = "UPDATE tai_khoan SET ho_va_ten='$ho_va_ten',email='$email',nam_sinh='$nam_sinh',so_dien_thoai='$so_dien_thoai' WHERE id_tai_khoan = $id_tai_khoan";
    }
    pdo_execute($sql);
    }

function quenmk ($email){
    $sql = "SELECT mat_khau FROM tai_khoan WHERE email = '$email'";
    $result = pdo_query($sql);
    return $result;
}
function updatePass($email){
    $sql = "UPDATE tai_khoan SET mat_khau = 'nhbbmncmwypfljhd' WHERE email = '$email'";
    pdo_execute($sql);
    echo '<script>alert("Kiểm tra email và đăng nhập lại")</script>';
    echo '<script>window.location.href="forgotpass.php"</script>';
    
}