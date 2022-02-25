<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K.mart</title>
    <link rel="stylesheet" href="../san_pham/csslogo_search.css">
    <link rel="stylesheet" href="../san_pham/danh_muc_sanpham.css">
    <link rel="stylesheet" href="../san_pham/css_phanchinh.css">
    <link rel="stylesheet" href="../san_pham/css_thong_tin_duoi.css">
    <link rel="stylesheet" type="text/css" href="giua.css">
    <style type="text/css">
        #tong{
            background: white;
            width: 100%;
            height: 1000px;
        }
        main{
            background: #EEEEEE;
        }
     #giua{
        width: 100%;
        height :800px;
    }

    </style>
</head>
<body>
    
    <div id="tong">
        <div id="tren">
            <div class="logo">
              <a href="../index.php">
                <h1 text-align="center"  style="margin-left: 50px ;margin-top: 10px; color: red;">K1.Mark </h1></a>
            </div>
        </div>
        <div id="giua">
            <div class="vien_trai"></div>
            <div class="giua">
            <main >
            <div class="container" >
            <div class="login-form" style="width: 100%; height: 100%;">
                
                <a href="edit_profile.php" style="color: black;">   <h3>Sửa thông tin cá nhân</h3></a>
                <br>
                <br>

                <a href="edit_password.php" style="color: black;">  <h3>Đổi lại mật khẩu</h3></a>
                        

                    
            </div>
            </div>
        </main>
        
           
 </div>
 <div class="vien_phai"></div>
                   
                </div>
 <?php include '../footer.php' ?>
</div>




            </body>

            </html>