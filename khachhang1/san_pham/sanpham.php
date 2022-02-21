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
		#tong{
			background:	#AAAAAA;
			width : 100% ;
			height : 1300px
		}

	</style>
</head>
<body>
	<div id="tong" >
		<?php include '../search_sign.php' ?>

		<?php 

		include	'danh_muc.php';
		require '../connect.php';
		$ma = $_GET['ma'] ;
		$sql = "select * from san_pham
		where ma = $ma";

		$ket_qua = mysqli_query($ket_noi,$sql) ;
		$bai_san_pham = mysqli_fetch_array($ket_qua);?>
		<div id="giua">
			<div class="vien_trai"></div>
			<div class="san_pham">
				<div class="thong_tin">
					<div class="anh">
						<img src="<?php echo $bai_san_pham['anh'] ?>" height="100%" width="100%">
					</div>

					<div class="thong_tin_chi_tiet">
						<div class="name">
							<h1><?php echo $bai_san_pham['ten']?></h1>
						</div>


						<div class="Gia">Giá : <?php echo $bai_san_pham['gia'] ?> đ</div>
						<div class="submit">
							<div class="add_gio_hang">
								<br>
								<a href="../giohang/add_cart.php?id=<?php echo $ma ?>">Thêm vào giỏ hàng</a>
							</div>
							<div class="dat_hang">
								<br>
								<a href="#">


									Đặt Hàng
								</a>
							</div>
						</div>
					</div> 
					<div class="mo_ta_chi_tiet">
					<h1>Mô tả chi tiết</h1>
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