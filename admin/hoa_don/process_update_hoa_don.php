<?php  
$ma = $_POST['ma'];
$trang_thai = $_POST['trang_thai'];
include '../connect.php';
if($trang_thai==='Đang giao'){ 
	$trang_thai = 0;
	 }elseif ($trang_thai==='Đã giao') {
		$trang_thai = 1;
	}else{
		$trang_thai = 2;}
		echo $trang_thai;
		$truyvan = "update hoa_don
		set 
		trang_thai = '$trang_thai'
		where
		ma = '$ma' 
		";
		mysqli_query($ket_noi,$truyvan);
$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
mysqli_close($ket_noi);
header('location:hoa_don.php');