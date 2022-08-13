<?php

$ten = $_POST['name'];
$email = $_POST['email'];
$gioi_tinh = $_POST['gender'];
$mat_khau = $_POST['password'];
$sdt = $_POST['phone_number'];
$dia_chi = $_POST['address'];

require '../connect.php';
$sql = "select count(*) from khach_hang where email = '$email'";
$result = mysqli_query($ket_noi,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1){

    session_start();
    $_SESSION['error'] = "Email này đã được đăng ký";
    header('location:signup.php');
    exit;
}

$sql = "insert into khach_hang(ten,gioi_tinh,email,mat_khau,sdt,dia_chi) 
value('$ten','$gioi_tinh','$email','$mat_khau','$sdt','$dia_chi') ";
mysqli_query($ket_noi,$sql);

$sql = "select ma from khach_hang 
where email = '$email'";
$result = mysqli_query($ket_noi,$sql);
$id = mysqli_fetch_array($result);
session_start();
    $_SESSION['success'] = "Đăng ký thành công!";
header('location:signin.php');
mysqli_close($ket_noi);