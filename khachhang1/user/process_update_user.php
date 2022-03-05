<?php
session_start();
$ten = $_POST['name'];
$gioi_tinh = $_POST['gender'];
$sdt = $_POST['phone_number'];
$dia_chi = $_POST['address'];

if(strlen($ten) == 0|| strlen($sdt) ==0 || strlen($dia_chi) ==0){
        $_SESSION['message'] = 'Không được để trống thông tin';
        header('location:user_body_profile.php');
        exit;
}else{
        $ma = $_SESSION['id'];
require '../connect.php';
$sql = "update khach_hang
        set 
        ten = '$ten',
        gioi_tinh = '$gioi_tinh',
        sdt = '$sdt',
        dia_chi = '$dia_chi'
        where
        ma = '$ma'

";
mysqli_query($ket_noi,$sql);
$_SESSION['message'] = 'Cập nhật thành công!';
header('location:user_body_profile.php');
}

