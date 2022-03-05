<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>K.mart</title>
    <link rel="stylesheet" type="text/css" href="giua.css">
    <link rel="stylesheet" type="text/css" href="phantren.css">
</head>
 
<body>
    
          
            <?php require 'phantren.php' ?>
          
      <main>
              <?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>
    
            <div class="container">
            <div class="login-form">
                <form action="process_signup.php" method="post">
                    <h1>Đăng ký </h1>
                    <div class="input-box">
                        <i ></i>
                        <input type="text" name="name" placeholder="Nhập tên">
                    </div>
                      <div class="input-box">
                        <i ></i>
                        <input type="email" name="email" placeholder="Nhập email">
                    </div>
                    <div class="input-box">
                        <i ></i>
                         <input type="password" name='password' placeholder="Nhập mật khẩu">
                    </div>
                       <div class="input-box">
                        <i ></i>
                         <input type="number" name="sdt" placeholder="Nhập số điện thoại">
                    </div>
                      <div class="input-box">
                        <i ></i>
                         <input type="text" name="dia_chi" placeholder="Địa chỉ">
                    </div>
                    <div class="btn-box">
                        <button type="submit">
                            Đăng ký
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </main>
        
           
           <?php require '../footer.php' ?>
       
    </body>
</html>
    