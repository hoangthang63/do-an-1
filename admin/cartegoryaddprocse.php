<?php 
$ten = $_POST['ten'];
require 'connect.php';
$sql="insert into danh_muc(ten)values('$ten')";
mysqli_query($ket_noi,$sql);
$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
mysqli_close($ket_noi);	