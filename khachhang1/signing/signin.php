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
    <link rel="stylesheet" type="text/css" href="giua.css">
    <link rel="stylesheet" type="text/css" href="phantren.css">
</head>
<body>
<?php require 'phantren.php' ?>
<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>
<div class="container">
            <div class="login-form">
                <form action="process_signin.php" method="post">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i ></i>
                        <input type="email" name="email" placeholder="Nhập email">
                    </div>
                    <div class="input-box">
                        <i ></i>
                         <input type="password" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div>
                        Ghi nhớ đăng nhập<input type="checkbox" name="remember">
                    </div>
                  
                    <select name="hinh_thuc">
                        <option >
                        Khách Hàng    
                        </option>
                        <option>
                        Nhân Viên       
                        </option>
                    </select>
                      
                   
                    <div class="btn-box">
                        <button type="submit">
                            Đăng nhập
                        </button>
                    </div>
                    <br>
                    <div class="btn-box" >
                        <a href="signup.php" style="color: black;"> 
                        Bạn chưa có tài khoản? Đăng ký.
                    </a>
                    </div>
                </form>
            </div>
            </div>
        </main>
        
           
           <?php require '../footer.php' ?>

</form>
</body>
</html>