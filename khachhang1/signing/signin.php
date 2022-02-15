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

        <main>
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
                        Bạn chưa có tài khoản ? Đăng ký.
                    </a>
                    </div>
                </form>
            </div>
            </div>
        </main>
        
           
           <?php require '../footer.php' ?>
       
    </body>
</html>