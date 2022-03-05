
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet"  type="text/css" href="../san_pham/csslogo_search.css">
	<link rel="stylesheet"  type="text/css" href="../san_pham/danh_muc_sanpham.css">

	<link rel="stylesheet"  type="text/css" href="../san_pham/css_thong_tin_duoi.css">
	<link rel="stylesheet" type="text/css" href="css_gio_hang.css">
</head>
<style type="text/css">
	#tong{
		height: 1300px;
		width: 100%;
	}
	#giua{
		height: 80%;
		width: 100%;

	}
</style>

<body>

<?php session_start(); 
?>
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
			<a href="../user/user_body_profile.php"> <?php echo "Xin chào, "; echo $_SESSION['name'];?> </a>
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
					<a href="xem.php">
						<img src="https://img.icons8.com/ios-filled/452/shopping-cart.png" height="35" title="Giỏ hàng">
					</a>

				</div>

			</div>
		</div>
<?php if(isset($_SESSION['cart'])){
$cart = $_SESSION['cart']; 
$sum = 0 ;
$trang = 1;
if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
    }
$i = 0;
$dem_so_san_pham = count($_SESSION['cart']);
$so_san_pham_1 = 2 ;
$so_trang =  ceil($dem_so_san_pham/$so_san_pham_1);
$bo_qua = $so_san_pham_1*($trang - 1); 
 ?>
	
		<div id="giua">
			<div class="vien_trai"></div>
			<div class="giua">
			<?php foreach ($cart as $ma => $each){ $i++; 
		if($i>$bo_qua && $i <= ($bo_qua + $so_san_pham_1)){?>	
				<div class="mat_hang">	
					<div class="anh">
						<img src="<?php echo $each['anh'] ?>">
					</div>
					<div class="thong_tin">
						<div class="name">
							<h3><?php echo $each['ten'] ?></h3>
						</div>

						<div class="name">
							Giá	:
							<?php echo $each['gia']; ?>
						</div>	
						<div class="name">
							
							Số lượng:
							 <a style=" color: black;" href="update_Sl_giam.php?id=<?php echo $id ?>">-</a>
						 <?php echo $each['soluong'] ?>
						 <a style=" color: black;" href="update_Sl_them.php">+</a>
						</div>	
						<br>
						<br>
						<div class="name">Tổng tiền: <?php echo $each['soluong']*$each['gia'] ?></div>
						</div >
						
						</div>
		<?php } ?>
		<?php  $sum +=$each['soluong']*$each['gia']; ?>
	<?php }?>
							
				<?php  for($i=1; $i<=$so_trang ; $i++) { 
  ?>
  <a href="?trang=<?php echo $i ?>" style = "color: black; " >
      <?php echo $i ?>
  </a>
<?php } ?>
<div class="dat_hang">
<h3>Tổng tiền 	<?php echo $sum ?></h3>
<?php if(isset($_SESSION['id'])){ ?>
<?php
$id = $_SESSION['id'];
require_once '../connect.php';
$sql = "select * from khach_hang where ma = '$id'";
$ket_qua = mysqli_query($ket_noi,$sql);
$each = mysqli_fetch_array($ket_qua);
?>
<form method="post" action="dathang.php">
	Tên
	<br>
	<input class="input-box" type="text" name="ten" value="<?php echo $each['ten'] ?>">
	<br>
Địa chỉ 
<br>
<input class="input-box"  type="text" name="dia_chi" value="<?php echo $each['dia_chi'] ?>">
<br>
Số điện thoại
<br>
<input class="input-box"  type="number" name="sdt" value="<?php echo $each['sdt'] ?>">
<br>
Ghi chú
<br>
<input class="input-box"  type="text" name="ghi_chu">
<br>
  <div class="btn-box">
<button>Đặt hàng</button>
</div>	
</form>
<br>
<br>
<?php }else{ ?>
<h1>	Vui lòng đăng nhập để đặt hàng</h1>
<?php } ?>
<?php } else{?>
	<h3 style="text-align: center;">
		<a style=" color: green;" href="../user/user_body_bill.php"> Xem đơn hàng đã đặt </a>
	</h3>
	<h1 style="text-align: center;">Giỏ hàng trống vui lòng quay trở lại trang chủ để mua hàng </h1>
<?php } ?>
</div>
					</div>
				</div>

			</div>
	
	
			<div class="vien_phai"></div>
			</div>
			<?php require '../footer.php' ?>
		
	</div>



</body>
</html>

