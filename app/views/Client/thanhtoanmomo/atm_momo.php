<?php
header('Content-type: text/html; charset=utf-8');

function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}
$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh toán khóa học qua MoMo";
$amount = $_POST['thanh_tien'];
$orderId = time() ."";
$redirectUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
$ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
$extraData = "";

include "../../../../config.php";;
include "../../../models/ClientModel/khoahoc.php";
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


    $partnerCode = $partnerCode;
    $accessKey = $accessKey;
    $serectkey = $secretKey;
    $orderId = $orderId; // Mã đơn hàng
    $orderInfo = $orderInfo;
    $amount = $amount;
    $ipnUrl = $ipnUrl;
    $redirectUrl = $redirectUrl;
    $extraData = $extraData;

    
    $requestId = time() . "";
    $requestType = "payWithATM";
    $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $serectkey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    header('Location: ' . $jsonResult['payUrl']);
?>