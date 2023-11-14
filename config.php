<?php
    function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "du_an_1";
        try {
            $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>
<?php 
function pdo_execute($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $connect=connect();
        $stmt=$connect->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connect);
    }
}
function pdo_query($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $connect = connect();
        $stmt= $connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connect);
    }
}
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $connect = connect();
        $stmt= $connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connect);
    }
}
function select_all_table() {
    if(isset($_GET['table'])){
        $table = $_GET['table'];
        $sql = "SELECT * FROM $table";
        $result = pdo_query($sql);
        return $result;
    }
}
function danh_muc() {
        $sql = "SELECT * FROM danh_muc_khoa_hoc";
        $result = pdo_query($sql);
        return $result;
}
function giang_vien() {
    $sql = "SELECT * FROM giang_vien";
    $result = pdo_query($sql);
    return $result;
}
function khoahoc() {
    $sql = "SELECT *,khoa_hoc.trang_thai FROM khoa_hoc join danh_muc_khoa_hoc ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc";
    $result = pdo_query($sql);
    return $result;
}
function kh_theo_dm(){
    if(isset($_GET['id_danh_muc'])){
        $id_danh_muc = $_GET['id_danh_muc'];
        $sql = "SELECT * FROM khoa_hoc WHERE id_danh_muc = '$id_danh_muc'";
        $result = pdo_query($sql);
        return $result;
    }
}
function delete() {
    if(isset($_GET["table"])&& isset($_GET['id'])&& isset($_GET['iddl'])){
        $table = $_GET['table'];
        $id = $_GET['id'];
        $iddl = $_GET['iddl'];
        $sql = "DELETE FROM $table WHERE $id = '$iddl'";
        pdo_execute($sql);
    }
}
?>