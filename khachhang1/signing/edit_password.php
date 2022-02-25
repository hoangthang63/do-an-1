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
    <?php 
    require '../connect.php';
    $ma = $_SESSION['id'];

    $sql = "select*from khach_hang where ma = '$ma'";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $thong_tin = mysqli_fetch_array($ket_qua);  ?>
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

                          <form action="edit_password_process.php" method="post">
                            <h1>Thay đổi Mật khẩu</h1>
                            
                            <div class="input-box">
                                <i > Nhập mật khẩu cũ </i>
                                <input type="password" name="password" >
                            </div>
                   
                            <div class="input-box">
                                <i >Nhập mật khẩu mới</i>
                                <input type="password" name="password_new" >
                            </div>

                            <div class="btn-box">
                                <button type="submit">
                                    Xác nhận
                                </button>
                            </div>
                            <br>

                        </form>
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
