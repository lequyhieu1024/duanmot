<?php 
function register($id_tai_khoan,$ten_tai_khoan,$email,$mat_khau,$id_role) {
    $sql = "INSERT INTO tai_khoan(id_tai_khoan,ten_tai_khoan, email, mat_khau,id_role) VALUES ('$id_tai_khoan','$ten_tai_khoan','$email','$mat_khau','$id_role')";
    pdo_execute($sql);
}
function login($ten_tai_khoan,$mat_khau) {
    $sql = "SELECT * FROM tai_khoan WHERE ten_tai_khoan='$ten_tai_khoan' AND mat_khau = '$mat_khau'";
    $result = pdo_query_one($sql);
    if($result ==true){
        $_SESSION['ten_tai_khoan'] = $ten_tai_khoan;
        $_SESSION['id_role'] = $result['id_role'];
        if(isset($_POST['remember'])){
            setcookie('remember', $mat_khau, time()+60*60*24*365,"/") ;
        }
        header('location:index.php');
    }else{
        header('location: index.php?redirect=login&loginErr');
    }
}
function checkRegister() {
    $sql = "SELECT ten_tai_khoan FROM tai_khoan";
    $result = pdo_query($sql);
    return $result;
}