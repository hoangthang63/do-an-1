<?php 
$ma = $_POST['ma'];
$ten = $_POST['ten'];	
$nha_san_xuat = $_POST['nha_san_xuat'];
$mo_ta = $_POST['mota'];	
$gia = $_POST['gia'];	
$anh = $_FILES['anh'];
$danh_muc = $_POST['danh_muc'];	

include 'connect.php';

$folder = 'photo/';

$file_exention = explode('.', $anh['name'])[1];

$path_file = $folder.time().'.'.$file_exention;

move_uploaded_file($anh['tmp_name'],$path_file);

mysqli_query($ket_noi,$truyvan);

$truyvan = "update san_pham
set 
ten = '$ten',
mo_ta = '$mo_ta',
anh = '$path_file',
gia = '$gia',
danh_muc = '$danh_muc',
nha_san_xuat = '$nha_san_xuat'
where
ma = '$ma' 
";

$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
mysqli_close($ket_noi);
header('location:product_list.php');