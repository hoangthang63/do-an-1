<?php 
session_start();
$ma = $_GET['id'];

$_SESSION['cart'][$ma]['soluong']++;

header('location:xem.php');