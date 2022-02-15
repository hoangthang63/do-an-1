<?php
include "header.php";
include "leftside.php";?>
<?php require 'connect.php';
$ma = $_GET['ma']; 
$sql = "select * from hoa_don_chi_tiet where ma_hoa_don = '$ma'" ;
$ket_qua = mysqli_query($ket_noi,$sql);
?>

<div class="admin-content-right">
    <div class="table-content">
    	<h1>Hoá đơn chi tiết</h1><br>
        <table>
        	<tr>
        		<th>Tên sản phẩm</th>
        		<th>Giá</th>
        		<th>Ảnh</th>
        		<th>Số lượng</th>
        		<th>Tổng tiền</th>
        	</tr>
        	<?php foreach ($ket_qua as  $value) {
        		$ma = $value['ma_san_pham']	;
        		$sql = "select * from san_pham where ma = '$ma' ";
        		$san_pham = mysqli_query($ket_noi,$sql);
        		$bai_san_pham = mysqli_fetch_array($san_pham);

        	 ?>
        	 <tr>
        	 	<td><?php echo $bai_san_pham['ten'] ?></td>
        	 	<td><?php echo $bai_san_pham['gia'] ?></td>
        	 	<td><img src="<?php echo $bai_san_pham['anh']?>" height ="80" width="40"></td>
        	 	<td><?php echo $value['so_luong']?></td>
        	 	<td><?php echo $value['so_luong']*$bai_san_pham['gia'] ?></td>
        	 </tr>
        	<?php } ?>
        	</table>
    	</div>
     <?php mysqli_close($ket_noi); ?>
</div>
</section>
<script src="script.js"></script>
</body>

</html>