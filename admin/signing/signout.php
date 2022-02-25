<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);

if(isset($_SESSION['vi_tri'])){
	unset($_SESSION['vi_tri']);
}

header('location:signin.php');
