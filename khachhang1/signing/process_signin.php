<?php

$email = $_POST['email'];
$mat_khau = $_POST['password'];
$hinh_thuc = $_POST['hinh_thuc'];
echo $hinh_thuc;    
require '../connect.php';
if($hinh_thuc === 'Nhân Viên'){
    $sql = "select * from nhan_vien where email = '$email' and mat_khau ='$mat_khau'";
 echo 1;
}else{

$sql = "select * from khach_hang where email = '$email' and mat_khau ='$mat_khau'";
}
$result = mysqli_query($ket_noi,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1 ){
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['ma'];
    $_SESSION['name'] = $each['ten'];
    if($hinh_thuc === 'Nhân Viên'){
    $_SESSION['vi_tri'] = $each['cap_do'];
    header('location:../../admin/index.php');
       exit;    
   }
    header('location:../index.php');
    exit;
}

header('location:signin.php?error= Sai tài khoản hoặc mật khẩu');



