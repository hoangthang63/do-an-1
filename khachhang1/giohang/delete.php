<?php 
session_start();
$ma = $_GET['id'];
unset($_SESSION['cart'][$ma]);
header('location:xem.php');