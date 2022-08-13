<?php session_start();
if(empty($_SESSION['id'])){
    header('location:../signing/signin.php?error= Bạn chưa đăng nhập');
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
		height: 84%;
		width: 100%;

	}
    #giua > .trai{
         background-color: white;
        width: 20%;
        height: 100%;
        float: left;
        text-align: center;
        /* border: 1px solid; */
        border-right: yellow solid 5px;

    }

    #giua > .trai ul{
        text-align: left;
    }
    #giua > .trai img{
        padding-top: 20px;
    }
    #giua > .phai{
        /* background: pink; */
        width: 100%;
        height: 100%;
        text-align: center;
    }
    #form-top{
        height: 90%;
    }
    #form-btn{
        height: 10%;
        bottom: 100px; right:0;
    }
    #form-left{
        margin-top: 30px;
        float: left;
        padding: left 30px; 
    }
    form #form-left ul{
        list-style: none;
        padding: 1rem 21rem;
        padding-right: 0;
    }
    form #form-left ul li {
        display: block;
        padding:1rem;
        margin:1.5rem 0;
        background:#333;
        color:#fff;
        font-size: 1.1rem;
        border-radius: 5rem;
        text-align: center;
    }
    #form-right{
        margin-top: 30px;
        float: left;
    }
    form #form-right ul{
        list-style: none;
        padding: 1rem 3rem;
    }
    form #form-right input{
        background :#333; 
        border: none;
        color: #fff;
        text-align: center;
        font-size: 1rem;
    }
    form #form-right ul li {
        display: block;
        padding:1rem;
        margin:1.5rem 0;
        background:#333;
        color:#fff;
        font-size: 1.1rem;
        border-radius: 5rem;
        text-align: center;
    }
    #duoi{
        height: 16%;
		width: 100%;
        background: black;
    }


    .trai ul {
        list-style: none;
        padding: 1rem 3rem;
    }
    .trai ul #log-out{
        padding-top: 80px;
        padding-bottom: 0;
    }
    .trai ul li a{
    display: block;
    padding:1rem;
    margin:1.5rem 0;
    background:#333;
    color:#fff;
    font-size: 1.1rem;
    border-radius: 5rem;
    text-align: center;
    
}
ul li a:hover{
    /* background:var(--yellow); */
    /* background-color: rgba(255,255,128,1); */
    letter-spacing: 2px;
    font-size: 1.2rem;
}
#btn{
    text-align: right;
    /* margin-top: 30px; */
}
#btn button{
    padding: 7.5px 15px;
    border-radius: 10px;
    background-color: #009999;
    color: #ffffff;
    border: none;
    outline: none;
    position: absolute; 
    bottom: 90px; 
    right:500px;
}
 button:hover{
    letter-spacing: 0.05px;
}
</style>
<body>
<div id="tong">
		<div id="tren">
			<div class="logo">
				<a href="../index.php">
					<h1 text-align="center" style="margin-left: 50px ;margin-top: 10px; color: red;">KL.Mart </h1>
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
			<a href="user_body_profile.php"> <?php echo "Xin chào, "; echo $_SESSION['name'];?> </a>
		<?php } ?>
				</div>
				<div class="dang_ky">
					<?php if(!isset($_SESSION['id'])){ ?>
						<a href="signing/signup.php">
							<img src="https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user2-128.png" height="35" title="Đăng ký">
						</a>
					<?php }else{ ?>
						<a href="../signing/signout.php">
							<img src="https://cdn-icons-png.flaticon.com/512/747/747335.png" height="35" title="Đăng xuất">

						</a>
					<?php } ?>
				</div>
				<div class="Gio_hang">
					<a href="../giohang/xem.php">
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
                    <div>
                        <ul>
                            <li><a href="user_body_profile.php">Hồ sơ cá nhân</a></li>
                            <li><a href="user_body_bill.php">Đơn mua</a></li>
                            <li><a href="user_body_change_password.php">Đổi mật khẩu</a></li>
                            <li id="log-out"><a href="../signing/signout.php">Đăng xuất</a></li>
                        </ul>
                    </div>
            </div>