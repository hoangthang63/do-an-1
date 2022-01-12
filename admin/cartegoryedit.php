<?php
include "header.php";
include "leftside.php";

?>



<body>
<?php 
require 'connect.php';
$ma = $_GET['ma'];

$sql = "select * from danh_muc where ma = '$ma'";
$ket_qua = mysqli_query($ket_noi,$sql) ;
$truy_van = mysqli_fetch_array($ket_qua);

 ?>
	<div class="admin-content-right">
		<h1>Sửa danh mục</h1><br>
		<div class="cartegory-add-content">
			<form action="cartegoryedit_procse.php" method="POST">
				<input type="hidden" name="ma" value="<?php echo $ma ?>">
				<input name="ten" value="<?php echo $truy_van['ten'] ?>" type="text" placeholder="Nhập tên danh mục">
				<button class="admin-btn" type="submit">Sửa</button>
			</form>
		</div>
	</div>
	</section>
<?
$loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
 mysqli_close($ket_noi); ?>
	<script src="script.js"></script>
</body>

</html>