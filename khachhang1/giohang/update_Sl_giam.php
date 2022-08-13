<?php 
session_start();
$ma = $_GET['id'];
require '../connect.php';
$sql_check_id = "select count(*) from san_pham where ma = '$ma'";
$result1 = mysqli_query($ket_noi,$sql_check_id);
$each1 = mysqli_fetch_array($result1);

if($each1['count(*)'] == 0){
    $_SESSION['message'] = 'Sản phẩm không tồn tại!';
    header('location:../index.php');
    exit;
}

if($_SESSION['cart'][$ma]['soluong'] == 1){
	header('location:xem.php');
	exit;
}else if($_SESSION['cart'][$ma]['soluong'] >1){
	$_SESSION['cart'][$ma]['soluong']--;
}else{
	unset($_SESSION['cart'][$ma]);
}
header('location:xem.php');