<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="csslogo_search.css">
	<link rel="stylesheet" type="text/css" href="danh_muc_sanpham.css">
	<link rel="stylesheet" type="text/css" href="css_phanchinh.css">
	<link rel="stylesheet" type="text/css" href="css_thong_tin_duoi.css">
	<style type="text/css">
		#tong{
			background:	#AAAAAA;
			width : 100% ;
			height : 2300px
		}
		

	</style>
</head>
<body>
	<div id="tong">

		<?php include 'search_sign.php' ?>
		
		<div id="danh_muc" >
			<div class="le_trai"></div>
			<ul>
				<li>
					<a href="#">
						<h3>  Latop</h3>
					</a>
				</li>
			</ul>
		</div>

		<div id="giua">
			<div class="vien_trai"></div>

			<div class="giua">
				
				<div class="san_pham">
					<div class="tieu_de">

						<div class="all">
							<a href="#">
								<h4>Xem tất cả</h4>
							</a>
						</div>
					</div>
				<?php
                $ket_noi = mysqli_connect('localhost','root','','doan1');
                $sql = "select * from san_pham";
                mysqli_set_charset($ket_noi,'utf8');
                $ket_qua = mysqli_query($ket_noi,$sql);                
                ?>
                



                <?php foreach ($ket_qua as $tung_san_pham) { ?>
                    <div>              
                        <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%">
                        <p> <?php echo $tung_san_pham['gia']?></p>
                        <h4><?php echo $tung_san_pham['ten']?></h4>
                        
                    </div>
                <?php } ?>
					<div class="mat_hang">
						<a href="#">
							<img src="https://product.hstatic.net/1000026716/product/rog_strix_g15_g513ih_hn015t_9e61847a6b8245e9ab9fa32cc2ffb6ba_large.png" height="70%">
							<div class="name"> MSI 300</div>
							<br>
							<div class="Gia">Giá : 30.000.000đ</div>

						</a>
					</div>
				</div>

				
			</div>

			<div class="vien_phai"></div>
		</div>
		  <?php include 'footer.php' ?>
	</div>
	<?php mysqli_close($ket_noi); ?>
</body>
</html>
