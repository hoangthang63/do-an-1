<?php
$ten = $_POST['ten'];
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];
$sdt = $_POST['sdt'];
$dia_chi = $_POST['dia_chi'];
$gioi_tinh = $_POST['gioi_tinh'];
$ngay_sinh = $_POST['ngay_sinh'];
$vi_tri = $_POST['vi_tri'];
if($vi_tri === 'Nhân Viên'){
    $vi_tri = 0;
}else{
$vi_tri = 1;
}

require '../connect.php';
$sql = "select count(*) from nhan_vien where email = '$email'";
$result = mysqli_query($ket_noi,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1){
    header('location:them_nhan_vien_process.php?error=Email này đã được đăng ký');
    exit;
}

$sql = "insert into nhan_vien(ten,email,mat_khau,sdt,dia_chi,gioi_tinh,ngay_sinh,cap_do) 
value('$ten','$email','$mat_khau','$sdt','$dia_chi','$gioi_tinh','$ngay_sinh','$vi_tri') ";
mysqli_query($ket_noi,$sql);
mysqli_close($ket_noi);
header('location:danh_sach_nhan_vien.php?sussecs=Đăng ký thàng công');