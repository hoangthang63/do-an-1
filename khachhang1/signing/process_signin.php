<?php

$email = $_POST['email'];
$mat_khau = $_POST['password'];

require '../connect.php';
$sql = "select * from khach_hang where email = '$email' and mat_khau ='$mat_khau'";
$result = mysqli_query($ket_noi,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1 ){
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['ma'];
    $_SESSION['name'] = $each['ten'];

    header('location:user.php');
    exit;
}

header('location:signin.php?error= Sai tài khoản hoặc mật khẩu');



