<?php 
  function lienhe($noi_dung, $ngay_lien_he,$id_tai_khoan,$trang_thai) {
    $sql = "INSERT INTO lien_he(noi_dung,ngay_lien_he,id_tai_khoan,trang_thai) VALUES('$noi_dung', '$ngay_lien_he','$id_tai_khoan','$trang_thai')";
    pdo_execute($sql);
  }