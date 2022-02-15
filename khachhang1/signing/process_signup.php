<?php

$ten = $_POST['name'];
$email = $_POST['email'];
$mat_khau = $_POST['password'];
$sdt = $_POST['sdt'];
$dia_chi = $_POST['dia_chi'];
require '../connect.php';
$sql = "select count(*) from khach_hang where email = '$email'";
$result = mysqli_query($ket_noi,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1){
    header('location:signup.php?error=Email này đã được đăng ký');
    exit;
}

$sql = "insert into khach_hang(ten,email,mat_khau,sdt,dia_chi) 
value('$ten','$email','$mat_khau','$sdt','$dia_chi') ";
mysqli_query($ket_noi,$sql);

$sql = "select ma from khach_hang 
where email = '$email'";
$result = mysqli_query($ket_noi,$sql);
$id = mysqli_fetch_array($result)['ma'];
session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $ten;

mysqli_close($ket_noi);
header('location:../index.php?sussecs=Đăng ký thàng công');