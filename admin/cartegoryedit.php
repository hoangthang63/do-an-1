<?php
include "header.php";
include "leftside.php";

?>



<body>

	<div class="admin-content-right">
		<h1>Sửa danh mục</h1><br>
		<div class="cartegory-add-content">
			<form action="" method="POST">
				<input name="cartegory_name" value="<?php echo $result['cartegory_name'] ?>" type="text" placeholder="Nhập tên danh mục">
				<button class="admin-btn" type="submit">Sửa</button>
			</form>
		</div>
	</div>
	</section>
	<script src="script.js"></script>
</body>

</html>