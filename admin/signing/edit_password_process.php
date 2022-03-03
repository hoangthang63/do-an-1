<?php 
session_start();
$password = $_POST['password'];
$password_news = $_POST['password_new'];
$ma = $_SESSION['id'];
require '../connect.php';
$sql = "select * from khach_hang
where ma = '$ma'";

$ket_qua = mysqli_query($ket_noi, $sql);
$thong_tin = mysqli_fetch_array($ket_qua); 
if($thong_tin['mat_khau'] === $password){
	$truy_van = "update nhan_vien 

	set 
	mat_khau = '$password_news'
	where
	ma = '$ma'"; 
	die($truy_van);
	mysqli_query($ket_noi,$truyvan);
	header('location:edit.php');
	exit;
}
header('location:edit_password.php?error=Sai mật khẩu');