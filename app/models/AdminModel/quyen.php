<?php 
function role(){
    $sql = "SELECT * FROM role";
        $result = pdo_query($sql);
        return $result;
}
function addrole($name_role,$mo_ta) {
    $sql = "INSERT INTO role(name_role,mo_ta) VALUES ('$name_role','$mo_ta')";
    pdo_execute($sql);
}
function editrole($id_role,$name_role,$mo_ta) {
    $sql = "UPDATE `role` SET id_role='$id_role', name_role='$name_role',mo_ta='$mo_ta' WHERE id_role = '$id_role'";
    pdo_execute($sql);
}