<?php 
$ma = $_GET['ma'];

require 'connect.php';
$truy_van = "delete from danh_muc
where ma = '$ma'";
mysqli_query($ket_noi,$truy_van);
$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
mysqli_close($ket_noi);
header('location:cartegory_list.php');