<?php
session_start();
$mat_khau_hien_tai = $_POST['mat_khau_hien_tai'];
$mat_khau_moi = $_POST['mat_khau_moi'];
$xac_nhan_mat_khau = $_POST['xac_nhan_mat_khau'];
require '../connect.php';

$mk_moi = "'$mat_khau_moi'";
$xac_nhan_mk = "'$xac_nhan_mat_khau'";
// die($xac_nhan_mk);
if($mk_moi != $xac_nhan_mk)
{
    header('location:doi_mat_khau.php?tb= Đã xảy ra lỗi!');
    exit;
}

$ma = $_SESSION['id'];
$sql = "select count(*) from khach_hang where ma = '$ma' and mat_khau = '$mat_khau_hien_tai'";
$result = mysqli_query($ket_noi,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];


if($number_rows == 1 ){
    $sql1 = "update khach_hang
    set mat_khau = $mat_khau_moi
    where ma = '$ma'";
    mysqli_query($ket_noi,$sql1);
    $_SESSION['message'] = 'Đổi mật khẩu thành công'; 
    header('location:user_body_profile.php');
}else
{
    header('location:doi_mat_khau.php?tb= Mật khẩu không chính xác!');
}