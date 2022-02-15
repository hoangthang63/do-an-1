<?php 
session_start();
$ma = $_GET['id'];
if($_SESSION['cart'][$ma] >1){
	$_SESSION['cart'][$ma]['soluong']--;
}else{
	unset($_SESSION['cart'][$ma]);
}
header('location:xem.php');