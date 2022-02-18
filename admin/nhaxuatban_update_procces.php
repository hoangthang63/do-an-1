<?php 
$ma = $_POST['ma'];
$ten = $_POST['ten'];
include 'connect.php';
$truyvan = "update nha_san_xuat
set 
ma = '$ma',
ten = '$ten'
where
ma = '$ma' 
";
mysqli_query($ket_noi,$truyvan);

mysqli_close($ket_noi);
header('location:nhaxuatban_list.php');