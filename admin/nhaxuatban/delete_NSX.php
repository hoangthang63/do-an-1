<?php 
$ma = $_GET['ma'];
require '../connect.php';
$truy_van = "delete from nha_san_xuat where ma = '$ma'";
mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);
header('location:nhaxuatban_list.php');