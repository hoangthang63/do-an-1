<?php 
$ma = $_POST['ma'];
$ten = $_POST['ten'];	
$danh_muc = $_POST['danh_muc'];	
$nha_san_xuat = $_POST['nha_san_xuat'];	
$mo_ta = $_POST['mo_ta'];	
$gia = $_POST['gia'];	
$anh = $_POST['anh'];	
include 'connect.php';
$truyvan = "update san_pham
set 
ten = '$ten',
mo_ta = '$mo_ta',
anh = '$anh',
gia = '$gia',

danh_muc = '$danh_muc',
nha_san_xuat = '$nha_san_xuat'
where
ma = '$ma' 
";
mysqli_query($ket_noi,$truyvan);
$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
mysqli_close($ket_noi);