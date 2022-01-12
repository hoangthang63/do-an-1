<?php  
$ma = $_POST['ma'];
$ten = $_POST['ten'];

$ket_noi = mysqli_connect('localhost','root','','doan1');

mysqli_set_charset($ket_noi,'utf8');

$sql="insert into nha_san_xuat(ma,ten)values('$ma','$ten')";

echo $ma;
echo $ten;

mysqli_query($ket_noi,$sql);
$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
mysqli_close($ket_noi);	
header('location:nhaxuatban_list.php');