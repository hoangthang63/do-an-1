<?php
    session_start();
    if(isset($_COOKIE['remember'])){
        require '../connect.php';
        $token = $_COOKIE['remember'];
        $sql = "select * from khach_hang 
        where token = '$token'
        limit 1";
        $result = mysqli_query($ket_noi,$sql);  
        $number_rows =  mysqli_num_rows($result);
        if($number_rows ==1){
            $each = mysqli_fetch_array($result);
            $_SESSION['id'] = $each['ma'];
            $_SESSION['name'] = $each['ten'];
        }

    }
    if(isset($_SESSION['id']))
    {
        header('location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>
<form method="post" action="process_signin.php">
    Email
    <input type="email" name='email'>
    <br>
    Mật khẩu
    <input type="password" name='password'>
    <br>
    Remember me
    <input type="checkbox" name="remember">
    <br>
    <button>Đăng nhập</button>
</form>
</body>
</html>