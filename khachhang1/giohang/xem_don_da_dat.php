<?php
session_start();
require '../connect.php';
$ma = $_SESSION['id']; 
$sql = "select * from hoa_don where ma_khach_hang = '$ma'" ;
$ket_qua = mysqli_query($ket_noi,$sql);
$bai_san_pham = mysqli_fetch_array($ket_qua);
?>

<section>
<div >
    <div class="table-content">
    	<h1>Đơn Hàng đã đặt</h1><br>
        <table>
        	<tr>
        		<th>Mã đơn</th>
        		<th>Tên người nhận</th>
        		<th>Sđt</th>
        		<th>Địa chỉ nhận</th>
        		<th>Những sản phẩm đã đặt</th>
        		<th>Tổng tiền</th>
        	</tr>
        	<?php foreach ($ket_qua as  $value) {
        		 $ma1 = $value['ma'];
        	 ?>
        	 <tr>
        	 	<td><?php echo $value['ma'] ?></td>
        	 	<td><?php echo $value['ten_nguoi_nhan'] ?></td>
        	 	<td><?php echo $value['sdt_nguoi_nhan']?></td>
        	 	<td><?php echo $value['dia_chi_nhan_hang']?></td>
        	 	<td>
                    
                    <?php
                        $sql1= "select * from hoa_don_chi_tiet join san_pham on ma_san_pham = ma 
                        where ma_hoa_don ='$ma1'";
                        $ket_qua1 = mysqli_query($ket_noi,$sql1);
                        $kq =mysqli_fetch_array($ket_qua1);
                        ?>

                        <?php foreach ($ket_qua1 as  $value1) { ?>
                            <?php echo $value1['ten']; echo " SL:"; echo $value1['so_luong']; ?>
                            <br>
                            <?php } ?>
                 </td>
        	 	<td><?php echo $value['tong_tien']?></td>
        	 </tr>
        	<?php } ?>
        	</table>
    	</div>
     <?php mysqli_close($ket_noi); ?>
</div>
</section>
</body>

</html>