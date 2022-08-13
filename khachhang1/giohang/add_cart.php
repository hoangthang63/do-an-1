<?php 

session_start();
if(isset($_SESSION['id'])){ 
    $ma = $_GET['id'];
if(empty($_SESSION['cart'][$ma])){
    require '../connect.php';
    $sql = "select * from san_pham where ma = '$ma'";
    $result = mysqli_query($ket_noi,$sql);
    $each = mysqli_fetch_array($result);
    $_SESSION['cart'][$ma]['ten'] = $each['ten'];
    $_SESSION['cart'][$ma]['gia'] = $each['gia'];
    $_SESSION['cart'][$ma]['anh'] = $each['anh'];
    $_SESSION['cart'][$ma]['soluong'] = 1;

}
else{
     $_SESSION['cart'][$ma]['soluong']++;
}
header('location:../index.php');
// echo json_encode($_SESSION['cart']);
}else
{
    $_SESSION['error'] = "Vui lòng đăng nhập để đặt hàng";
    header('location:../signing/signin.php');
}
