<?php 
session_start();
$ten = $_POST['ten'];
$dia_chi = $_POST['dia_chi'];
$sdt = $_POST['sdt'];
$password = $_POST['password'];
require '../connect.php';
$ma = $_SESSION['id'];
$sql = "select * from khach_hang
where ma = '$ma'";

$ket_qua = mysqli_query($ket_noi, $sql);
$thong_tin = mysqli_fetch_array($ket_qua); 
if($thong_tin['mat_khau'] === $password){
	

	$truy_van = "update khach_hang 

	set 
	ten = '$ten',
	dia_chi = '$dia_chi',
	sdt = '$sdt'

	where
	ma = '$ma'"; 

	mysqli_query($ket_noi,$truyvan);
	header('location:edit.php');
	exit;
}
header('location:edit_profile.php?error=Sai mật khẩu');