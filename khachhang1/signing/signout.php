<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['cart']);
if(isset($_SESSION['vi_tri'])){
	unset($_SESSION['vi_tri']);
}

header('location:../index.php');
