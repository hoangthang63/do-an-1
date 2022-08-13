<?php 

$ten_nguoi_nhan = $_POST['ten'];
$dia_chi_nhan_hang = $_POST['dia_chi'];
$sdt_nguoi_nhan = $_POST['sdt'];
$ghi_chu = $_POST['ghi_chu'];
require '../connect.php';
session_start();
$cart = $_SESSION['cart'];
$tong_tien = 0;
foreach ($cart as $each) {
$tong_tien += $each['soluong']*$each['gia'];
}
if($tong_tien == 0){
    $_SESSION['error'] = "Giỏ hàng của bạn chưa có sản phẩm nào!";
	header('location:../index.php');
	exit;
}
$ma_khach_hang = $_SESSION['id'];
$trang_thai = 0;
$sql = "insert into hoa_don(ma_khach_hang,ten_nguoi_nhan,sdt_nguoi_nhan,ghi_chu,dia_chi_nhan_hang,tong_tien,trang_thai)values('$ma_khach_hang','$ten_nguoi_nhan','$sdt_nguoi_nhan','$ghi_chu','$dia_chi_nhan_hang','$tong_tien','$trang_thai')";
// die($sql);
mysqli_query($ket_noi,$sql);
$sql = "select max(ma) from hoa_don where ma_khach_hang = '$ma_khach_hang'";
$result =mysqli_query($ket_noi,$sql);
// die($sql);
$ma_hoa_don = mysqli_fetch_array($result)['max(ma)'];
echo $ma_hoa_don;

foreach ($cart as $ma_san_pham => $each) {
	$so_luong = $each['soluong'];
	$sql = "insert into hoa_don_chi_tiet(ma_hoa_don,ma_san_pham,so_luong)values('$ma_hoa_don','$ma_san_pham','$so_luong')";
	mysqli_query($ket_noi,$sql);
}
mysqli_close($ket_noi);
unset($_SESSION['cart']);
header('location:../index.php');
