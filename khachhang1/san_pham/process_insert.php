<?php  

$ten = $_POST['ten'];
$mo_ta = $_POST['mo_ta'];
$gia = $_POST['gia'];
$anh = $_POST['anh'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];
$danh_muc = $_POST['danh_muc'];

include '../connect.php';

$sql = "insert into san_pham(ten,mo_ta,gia,anh,ma_nha_san_xuat,danh_muc) 
values('$ten','$mo_ta','$gia','$anh','$ma_nha_san_xuat','$danh_muc')";

mysqli_query($ket_noi,$sql);
$loi = mysqli_error($ket_noi);
echo $loi;

mysqli_close($ket_noi);
            