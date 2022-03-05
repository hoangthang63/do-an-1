
<div id="tren">
	<div class="logo">
		<a href="index.php">
			<h1 text-align="center" style="margin-left: 50px ;margin-top: 10px; color: red;">K1.Mark </h1>
		</a>
	</div>
	<div class="timkiem">
		<form action="tim_kiem.php" method="gets">
			<input class="tim_kiem" type="search" name="tim_kiem" <?php if(isset($_GET['tim_kiem'])){
			 ?> value ='<?php echo $_GET['tim_kiem'] ?>'

				<?php }else{
					
				 ?>
				 placeholder ='Search...'<?php } ?> >
		</form>
	</div>

	<div class="dang_nhap">
		<div class="dangnhap">
			<?php if(!isset($_SESSION['id'])){ ?>
			<a href="signing/signin.php">
				<img src="https://cdn-icons-png.flaticon.com/512/747/747335.png" height="35" title="Đăng nhập">

			</a>
		<?php }else{ ?>
			<br>
			<a href="user/user_body_profile.php"> <?php echo "Xin chào, "; echo $_SESSION['name'];?> </a>
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