<?php 
  function lienhe($noi_dung, $ngay_lien_he,$id_tai_khoan,$trang_thai) {
    $sql = "INSERT INTO lien_he(noi_dung,ngay_lien_he,id_tai_khoan,trang_thai) VALUES('$noi_dung', '$ngay_lien_he','$id_tai_khoan','$trang_thai')";
    pdo_execute($sql);
  }
  function mycontact(){
    $id_tai_khoan = $_SESSION['id_tai_khoan'];
    $sql = "SELECT * FROM lien_he WHERE id_tai_khoan = '$id_tai_khoan'";
    $result = pdo_query($sql);
    return $result;
  }