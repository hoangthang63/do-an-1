<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="giua.css">
    <link rel="stylesheet" type="text/css" href="phantren.css">
    <style>
        .span_loi{
            color: red;
        }
    </style>
</head>
<body>
<?php require 'phantren.php' ?>
<?php
session_start();
    if(isset($_SESSION['error']))
    {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
?>
        <main>
            <div class="container">
            <div class="login-form">
                <form action="process_signup.php" method="post">
                    <h1>Form Đăng ký</h1>
                    <div class="input-box">
                        <i ></i>
                        <input type="text" name="name" placeholder="Nhập tên" id="ten">
                        <span class="span_loi" id="loi_ten"></span>
                    </div>
                    <div class=>
                        <i ></i>
                        <input type="radio" name="gender" value="nam">Nam
                        <input type="radio" name="gender" value="nữ">Nữ
                        <span class="span_loi" id="loi_gioi_tinh"></span>
                    </div>
                      <div class="input-box">
                        <i ></i>
                        <input type="email" name="email" placeholder="Nhập email" id="email">
                        <span class="span_loi" id="loi_email"></span>
                    </div>
                    <div class="input-box">
                        <i ></i>
                         <input type="password" name='password' placeholder="Nhập mật khẩu" id="mat_khau">
                         <span class="span_loi" id="loi_mat_khau"></span>
                    </div>
                    <div class="input-box">
                        <i ></i>
                         <input type="number" name="phone_number" placeholder="Nhập số điện thoại" id="phone_number">
                         <span class="span_loi" id="loi_sdt"></span>
                    </div>
                      <div class="input-box">
                        <i ></i>
                         <input type="text" name="address" placeholder="Địa chỉ" id="dia_chi">
                         <span class="span_loi" id="loi_dia_chi"></span>
                    </div>
                    <div class="btn-box">
                    <button type="submit" onclick="return kiem_tra()">Đăng Ký</button>
                    </div>
                    <div class="btn-box" >
                        <a href="signin.php" style="color: black;"> 
                        Bạn đã có tài khoản? Đăng nhập.
                    </a>
                    </div>
                </form>
            </div>
            </div>
        </main>


<script>
    
    <?php require 'validate.js' ?>

</script>
<?php require '../footer.php' ?>
</body>
</html>