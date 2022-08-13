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
    if(isset($_GET['error'])) { ?>
        <p style="color: red"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
<?php
    if(isset($_SESSION['success']))
    { ?>
    <p style="color: green"> <?php echo  $_SESSION['success']; ?> </p>
        
    <?php unset($_SESSION['success']); ?>
        <?php }?>

        <?php
    if(isset($_SESSION['error']))
    { ?>
    <p style="color: red"> <?php echo  $_SESSION['error']; ?> </p>
        
    <?php unset($_SESSION['error']); ?>
        <?php }?>

        

<div class="container">
            <div class="login-form">
                <form action="process_signin.php" method="post">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i ></i>
                        <input type="email" name="email" placeholder="Nhập email" id="email">
                        <span style="color : red" class="span_loi" id="loi_email"></span>
                    </div>
                    <div class="input-box">
                        <i ></i>
                         <input type="password" name="password" placeholder="Nhập mật khẩu" id="mat_khau">                         
                         <span style="color : red" class="span_loi" id="loi_mat_khau"></span>
                    </div>
                    <div>
                        Ghi nhớ đăng nhập<input type="checkbox" name="remember">
                    </div>
                  
<br>
<br>
<br>
                      
                   
                    <div class="btn-box">
                        <button  onclick="return kiem_tra()">
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
        

           

</form>
<br>
<br>
<br>
<br>
<br>
<br>
<script> 

   
function kiem_tra(){
let kiem_tra_loi = false;
              let email = document.getElementById('email').value;
    if(email.length === 0)
    {
        document.getElementById('loi_email').innerHTML = 'Email không được để trống';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_email').innerHTML = '';
    }

    let mat_khau = document.getElementById('mat_khau').value;
    if(mat_khau.length === 0)
    {
        document.getElementById('loi_mat_khau').innerHTML = 'Mật khẩu không được để trống';
        kiem_tra_loi = true;
    }else if(mat_khau.length < 8)
    {
        document.getElementById('loi_mat_khau').innerHTML = 'Mật khẩu không được ít hơn 8 ký tự';
        kiem_tra_loi = true;
    }
    else{
        document.getElementById('loi_mat_khau').innerHTML = '';
    }
    if(kiem_tra_loi){
        return false;
    }
}
 
        </script>
        <?php require '../footer.php' ?>
</body>
</html>