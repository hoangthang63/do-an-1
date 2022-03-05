<?php session_start();
if(empty($_SESSION['id'])){
    header('location:signin.php?error= Bạn chưa đăng nhập');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="../san_pham/csslogo_search.css">
	<link rel="stylesheet"  type="text/css" href="../san_pham/danh_muc_sanpham.css">
	<link rel="stylesheet"  type="text/css" href="../san_pham/css_thong_tin_duoi.css">
	<link rel="stylesheet" type="text/css" href="css_gio_hang.css">
</head>
<style type="text/css">
    	*{
		margin: 0;
		padding: 0;
	}
	#tong{
		height: 700px;
		width: 100%;
	}
	#giua{
		height: 80%;
		width: 100%;

	}
    #giua > .trai{
        background: red;
        width: 20%;
        height: 100%;
        float: left;
        text-align: center;
    }
    #giua > .trai h1{
        color: green;
    }
    #giua > .trai ul{
        text-align: left;
    }
    #giua > .phai{
        background: pink;
        width: 100%;
        height: 100%;
        text-align: center;
    }

    #duoi{
        height: 20%;
		width: 100%;
        background: black;
    }
</style>
<body>
<div id="tong">
		<div id="tren">
			<div class="logo">
				<a href="../index.php">
					<h1 text-align="center" style="margin-left: 50px ;margin-top: 10px; color: red;">K1.Mark </h1>
				</a>
			</div>
			<div class="timkiem"></div>
			<div class="dang_nhap">
				<div class="dangnhap">
					<?php if(!isset($_SESSION['id'])){ ?>
						<a href="signing/signin.php">
							<img src="https://cdn-icons-png.flaticon.com/512/747/747335.png" height="35" title="Đăng nhập">

						</a>
					<?php }else{ ?>
			<br>
			<a href="signing/user.php"> <?php echo "Xin chào, "; echo $_SESSION['name'];?> </a>
		<?php } ?>
				</div>
				<div class="dang_ky">
					<?php if(!isset($_SESSION['id'])){ ?>
						<a href="signing/signup.php">
							<img src="https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user2-128.png" height="35" title="Đăng ký">
						</a>
					<?php }else{ ?>
						<a href="signing/signout.php">
							<img src="https://cdn-icons-png.flaticon.com/512/747/747335.png" height="35" title="Đăng xuất">

						</a>
					<?php } ?>
				</div>
				<div class="Gio_hang">
					<a href="giohang/xem.php">
						<img src="https://img.icons8.com/ios-filled/452/shopping-cart.png" height="35" title="Giỏ hàng">
					</a>

				</div>
			</div>
		</div>
        <div id="giua">
            <div class="trai">
            <img src="https://img.icons8.com/external-bearicons-glyph-bearicons/64/000000/external-User-essential-collection-bearicons-glyph-bearicons.png"/>
            <h1> <?php 
            echo $_SESSION['name'];
                ?></h1>
                <ul>
                    <li><a href="user.php">Hồ sơ</a></li>
                    <li><a href="don_mua.php">Đơn mua</a></li>
                    <li><a href="doi_mat_khau.php">Đổi mật khẩu</a></li>
                </ul>
            </div>
            <div class="phai">
            <?php
    if(isset($_GET['tb'])) { ?>

        <?php   
// PHP program to pop an alert   
// message box on the screen   
  // Function definition   
  $message = $_GET['tb'];
function function_alert($message) {   
 // Display the alert box    
    echo "<script type ='text/JavaScript'>";  
    echo "alert('$message')";  
    echo "</script>";   
}   
// Function call   
function_alert($message);   
  ?>  
        <?php } ?>
                        <form action="process_doi_mat_khau.php" method="post">
                        <div class="input-box">
                        <i ></i>
                        Mật khẩu hiện tại
                        <input type="password" name="mat_khau_hien_tai" id="mat_khau_hien_tai">
                        <br>
                        <span style="color : red" class="span_loi" id="loi_mat_khau_hien_tai"></span>
                    </div>
                    <div class="input-box">
                        <i ></i>
                        Mật khẩu mới
                         <input type="password" name="mat_khau_moi" id="mat_khau_moi">    
                         <br>                     
                         <span style="color : red" class="span_loi" id="loi_mat_khau_moi"></span>
                    </div>
                    <div class="input-box">
                        <i ></i>
                        Xác nhận mật khẩu
                         <input type="password" name="xac_nhan_mat_khau" id="xac_nhan_mat_khau">   
                         <br>                      
                         <span style="color : red" class="span_loi" id="loi_xac_nhan_mat_khau"></span>
                    </div>
                    <div class="btn-box">
                        <button  onclick="return kiem_tra()">
                            Xác nhận
                        </button>
                    </div>
                        </form>
                        <script>   /*
function kiem_tra(){
    let kiem_tra_loi = false;
    let mat_khau_hien_tai = document.getElementById('mat_khau_hien_tai').value;
    if(mat_khau_hien_tai.length < 8)
    {
        document.getElementById('loi_mat_khau_hien_tai').innerHTML = 'Mật khẩu ít nhất có 8 ký tự';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_mat_khau_hien_tai').innerHTML = '';
    }

    let mat_khau_moi = document.getElementById('mat_khau_moi').value;
    if(mat_khau_moi.length === 0)
    {
        document.getElementById('loi_mat_khau_moi').innerHTML = 'Mật khẩu không được để trống';
        kiem_tra_loi = true;
    }else if(mat_khau_moi.length < 8)
    {
        document.getElementById('loi_mat_khau_moi').innerHTML = 'Mật khẩu không được ít hơn 8 ký tự';
        kiem_tra_loi = true;
    }
    else{
        document.getElementById('loi_mat_khau_moi').innerHTML = '';
    }

    let xac_nhan_mat_khau = document.getElementById('xac_nhan_mat_khau').value;
    if(xac_nhan_mat_khau != mat_khau_moi || xac_nhan_mat_khau.length==0){
        document.getElementById('loi_xac_nhan_mat_khau').innerHTML = 'Mật khẩu không khớp';
        kiem_tra_loi = true;
    }

    if(kiem_tra_loi){
        return false;
    }
}*/
        </script>
            </div>
            
        </div>
        <div id="duoi"></div>
</div>

</body>
</html>