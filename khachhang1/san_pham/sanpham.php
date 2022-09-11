<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="csslogo_search.css">
	<link rel="stylesheet" type="text/css" href="danh_muc_sanpham.css">
	<link rel="stylesheet" type="text/css" href="sanpham.css">
	<link rel="stylesheet" type="text/css" href="css_thong_tin_duoi.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#tong{
			background:	#AAAAAA;
			width : 100% ;
			height : 800px
		}

	</style>
</head>
<body>
	<div id="tong" >
	<div id="tren">
	<div class="logo">
		<a href="../index.php">
			<h1 text-align="center" style="margin-left: 50px ;margin-top: 10px; color: red;">KL.Mart </h1>
		</a>
	</div>
	<div class="timkiem">

	</div>

	<div class="dang_nhap">
		<div class="dangnhap">
			<?php if(!isset($_SESSION['id'])){ ?>
			<a href="../signing/signin.php">
				<img src="https://cdn-icons-png.flaticon.com/512/747/747335.png" height="35" title="Đăng nhập">

			</a>
		<?php }else{ ?>
			<br>
			<a href="../user/user_body_profile.php"> <?php echo "Xin chào, "; echo $_SESSION['name'];?> </a>
		<?php } ?>
		</div>
		<div class="dang_ky">
			<?php if(!isset($_SESSION['id'])){ ?>
				
			<a href="../signing/signup.php">
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
<div id="danh_muc" >
    <div class="le_trai"></div>
    <ul>
        <li>
            <a href="../tim_kiem.php?danh_muc=Bút">
                <h3>Bút </h3>
            </a>
        </li>
        <li>
            <a href="../tim_kiem.php?danh_muc=Vở">
                <h3>Vở </h3>
            </a>
        </li>
        <li>
            <a href="../tim_kiem.php?danh_muc=Máy tính bỏ túi">
                <h3>Máy tính bỏ túi</h3>
            </a>
        </li>
        <li>
            <a href="../tim_kiem.php?danh_muc=Giấy in ấn">
                <h3>Giấy in ấn</h3>
            </a>
        </li>
        <li>
            <a href="../tim_kiem.php?danh_muc=Khác">
                <h3>Khác</h3>
            </a>
        </li>
    </ul>
</div>
		<?php 

		//include	'danh_muc.php';
		require '../connect.php';
		$ma = $_GET['ma'] ;
		$sql = "select * from san_pham
		where ma = $ma";
		$sql1 = "SELECT sum(so_luong) as so_luong 
		FROM hoa_don_chi_tiet JOIN (SELECT * FROM hoa_don WHERE trang_thai = 1) AS a 
		ON hoa_don_chi_tiet.ma_hoa_don = a.ma 
		WHERE hoa_don_chi_tiet.ma_san_pham = '$ma'";
		$ket_qua = mysqli_query($ket_noi,$sql) ;
		$ket_qua1 = mysqli_query($ket_noi,$sql1);
		$da_ban = mysqli_fetch_array($ket_qua1);
		$so_luong = $da_ban['so_luong'];
		$bai_san_pham = mysqli_fetch_array($ket_qua);
		if($bai_san_pham['anh'] == null){
			header('location:../index.php');
		}
		
		?>

		<div id="giua">
			<div class="vien_trai"></div>
			<div class="san_pham">
				<div class="thong_tin">
					<div class="anh" style="background-color: white;">
					<p style="background-color: white;">
					Đã bán: <?php if($so_luong == null){
						echo 0;
					} else{
						echo $so_luong;
					}
					
					?> 
					</p>
						<img src="<?php echo $bai_san_pham['anh'] ?>" height="95%" width="100%">
						
					</div>

					<div class="thong_tin_chi_tiet">
						<div class="name">
							<h1><?php echo $bai_san_pham['ten']?></h1>
						</div>


						<div class="Gia">Giá : <?php echo $bai_san_pham['gia'] ?> đ</div>
						<div class="submit">
							<div style=" background: green;" class="add_gio_hang">
								<br>
								<a style="color: white;" href="../giohang/add_cart.php?id=<?php echo $ma ?>">Thêm vào giỏ hàng</a>
							</div>
							
						</div>
					</div> 
					<div class="mo_ta_chi_tiet">
					<h1 style="padding-top: 300px;">Mô tả chi tiết</h1>
					<h2><?php echo nl2br($bai_san_pham['mo_ta']) ?></h2>

				</div>

				</div>
				
			</div>

			<div class="vien_phai"></div>
		</div> 
		
		<?php include '../footer.php' ?> 
		<?php mysqli_close($ket_noi	); 	 ?>
	</div>
</body>
</html>