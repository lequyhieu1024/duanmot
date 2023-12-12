<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * Description of vnpay_ajax
 *
 * @author xonv
 */
require_once("./config.php");
include "../../../../config.php";;
include "../../../models/ClientModel/khoahoc.php";
$vnp_TxnRef = rand(0,9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = "Thanh toán khóa học";
$vnp_OrderType = "billpayment";
$vnp_Amount = $_POST['thanh_tien'] * 100;
$vnp_Locale = "VN";
$vnp_BankCode = "NCB";
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

$id_tai_khoan = $_POST['id_tai_khoan'];
$ho_va_ten = $_POST['ho_va_ten'];
$so_dien_thoai = $_POST['so_dien_thoai'];
$email = $_POST['email'];
$id_khoa_hoc = $_POST['id_khoa_hoc'];
$id_giang_vien = $_POST['id_giang_vien'];
$thanh_tien = $_POST['thanh_tien'];
$ngay_dang_ky_hoc = $_POST['ngay_dang_ky_hoc'];
$trang_thai = $_POST['trang_thai'];
$id_khuyen_mai = $_POST['khuyen_mai'];
$lo_trinh = $_POST['lo_trinh_hoc'];
$pttt = $_POST['pttt'];
dangkykhoahoc($id_tai_khoan, $id_khoa_hoc, $id_giang_vien, $thanh_tien, $ngay_dang_ky_hoc,$lo_trinh, $trang_thai ,$id_khuyen_mai,$ho_va_ten, $so_dien_thoai, $email,$pttt);

//Add Params of 2.0.1 Version
//$vnp_ExpireDate = $_POST['txtexpire'];
//Billing

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,

    // 'id_tai_khoan' => $id_tai_khoan,
    // 'ho_va_ten' => $ho_va_ten,
    // 'so_dien_thoai' => $so_dien_thoai,
    // 'email' => $email,
    // 'id_khoa_hoc' => $id_khoa_hoc,
    // 'id_giang_vien' => $id_giang_vien,
    // 'thanh_tien' => $thanh_tien,
    // 'ngay_dang_ky_hoc' => $ngay_dang_ky_hoc,
    // 'trang_thai' => $trang_thai,
    // 'id_khuyen_mai' => $id_khuyen_mai,
    // 'lo_trinh' => $lo_trinh
);
if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}
// if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
//     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
// }

//var_dump($inputData);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) {
        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
