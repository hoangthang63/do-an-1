<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="san_pham/csslogo_search.css">
	<link rel="stylesheet" href="san_pham/danh_muc_sanpham.css">
	<link rel="stylesheet" href="san_pham/css_phanchinh.css">
	<link rel="stylesheet" href="san_pham/css_thong_tin_duoi.css">
	<style type="text/css">
		#tong 
		{

			width: 100%;
			height: 1000px
		}
		#giua
		{
			width: 100%;
			height :900px;
		}
		.timkiem input[class="tim_kiem"] {
			width: 70%;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
			background-color: white;
			padding: 12px 20px 12px 40px;
			display: block;
			margin-top: 10px;
			margin-left: auto;
			margin-right: auto;

		}
		.mat_hang{
			width :230px;
			height: 300px ;
			background: white;
			margin-top: 5px ;
			margin-left: 30px;
			float: left;
			display: block;
			border-radius: 10px;
		}

	</style>
</head>
<body>
	<div id="tong">
		
		
		<?php 

		include 'search_sign.php' ;
		include 'san_pham/danh_muc.php' ;	
		require 'connect.php';
		$trang = 1;
		if(isset($_GET['trang'])){
			$trang = $_GET['trang'];
		}
		if(isset($_GET['tim_kiem'])){
			$tim_kiem = $_GET['tim_kiem']; 
			$sql_so_san_pham =  "select count(*) from san_pham where ten like '%$tim_kiem%'";
			$mang_so_san_pham = mysqli_query($ket_noi,$sql_so_san_pham);
			$ket_qua_so_san_pham = mysqli_fetch_array($mang_so_san_pham);
			$so_san_pham = $ket_qua_so_san_pham['count(*)'];
			$so_san_pham_1 = 4 ;
			$so_trang =  ceil($so_san_pham/$so_san_pham_1);
			$bo_qua = $so_san_pham_1*($trang - 1);
			$sql = "select * from san_pham where ten like '%$tim_kiem%' Limit $so_san_pham_1 offset $bo_qua";}
			else{
				$danh_muc = $_GET['danh_muc'];
				$sql_so_san_pham =  "select count(*) from san_pham where danh_muc = '$danh_muc'";
				$mang_so_san_pham = mysqli_query($ket_noi,$sql_so_san_pham);
				$ket_qua_so_san_pham = mysqli_fetch_array($mang_so_san_pham);
				$so_san_pham = $ket_qua_so_san_pham['count(*)'];
				$so_san_pham_1 = 4 ;
				$so_trang =  ceil($so_san_pham/$so_san_pham_1);
				$bo_qua = $so_san_pham_1*($trang - 1);
				$sql = "select * from san_pham where danh_muc = '$danh_muc' Limit $so_san_pham_1 offset $bo_qua";
				
			}
			$ket_qua = mysqli_query($ket_noi,$sql);
			?>
			<?php require 'phan_trang.php' ?>
			<div id="giua">
				<div class="vien_trai"></div>
				<div class="giua">
						<div style="width: 100%;" >
					<?php foreach($ket_qua as $tung_san_pham){ ?>
						  <div class="mat_hang">
							<a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
								<img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
								<div class="name">
									<?php echo $tung_san_pham['ten'] ?>
								</div>
								<br>
								<div class="Gia"> Giá :<?php echo $tung_san_pham['gia'] ?> VND</div>
							</a>
						</div>
					<?php } ?>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>	
				<div style="width: 100%;" >
						<?php  for($i=1; $i<=$so_trang ; $i++) { 
						?>
						<a href="?<?php if(isset($_GET['tim_kiem'])){
							$tim_kiem = $_GET['tim_kiem'];
							echo 'tim_kiem='.$tim_kiem;
						}
						else{
							$danh_muc = $_GET['danh_muc'];

							echo 'danh_muc='.$danh_muc ;
						}  ?>&trang=<?php echo $i ?>" style = "color: black; " >
						<?php echo $i ?>
					</a>
				<?php } ?>
				</div>
			</div>
			<div class="vien_phai"></div>
		</div>

		<?php include 'footer.php' ?>
	</div>

</body>
</html>