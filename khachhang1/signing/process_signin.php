<?php

$email = $_POST['email'];
$mat_khau = $_POST['password'];
if(isset($_POST['remember']))
{
    $remember = true;
}else{
    $remember = false;
}

require '../connect.php';
$sql = "select * from khach_hang where email = '$email' and mat_khau ='$mat_khau'";
$result = mysqli_query($ket_noi,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1 ){
    session_start();
    $each = mysqli_fetch_array($result);
    $id = $each['ma'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $each['ten'];
    if($remember){
        $token = uniqid('user_', true);
        $sql = "update khach_hang 
        set 
        token = '$token'
        where ma = '$id' ";
        setcookie('remember', $token, time() + 60*60*24*30);
    }
    header('location:user.php');
    exit;
}

header('location:signin.php?error= Sai tài khoản hoặc mật khẩu');



