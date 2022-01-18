<?php
$ma = $_POST['ma'];
$ten = $_POST['ten'];
$mo_ta = $_POST['mo_ta'];
$gia = $_POST['gia'];
$anh = $_POST['anh'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];

include '../connect.php';

$truy_van = "update san_pham
set
ten = '$ten',
mo_ta = '$mo_ta',
gia = '$gia',
anh = '$anh',
ma_nha_san_xuat = '$ma_nha_san_xuat'
where
ma = '$ma'
";

mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);