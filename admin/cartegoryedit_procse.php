<?php 
$ma = $_POST['ma'];
$ten = $_POST['ten'];
require 'connect.php';
$truy_van = "update danh_muc
set 
ten = '$ten'
where
ma = '$ma'";
mysqli_query($ket_noi,$truy_van);
$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
mysqli_close($ket_noi);
header('location:cartegory_list.php');