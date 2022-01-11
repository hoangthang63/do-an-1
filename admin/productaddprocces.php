<?php  
$ten = $_POST['ten'];
$danh_muc = $_POST['danh_muc'];
$nha_san_xuat = $_POST['nha_san_xuat'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$anh = $_POST['anh'];
$ket_noi = mysqli_connect('localhost','root','','doan1');
mysqli_set_charset($ket_noi,'utf8');
$sql="insert into san_pham(ten,mo_ta,anh,gia,nha_san_xuat,danh_muc)values('$ten','$mo_ta','$anh','$gia','$nha_san_xuat','$danh_muc')";

mysqli_query($ket_noi,$sql);
$loi = mysqli_error($ket_noi);
echo $loi;
mysqli_close($ket_noi);	