<?php 
session_start();
if(empty($_SESSION['id'])){
    header('location:../index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../san_pham/csslogo_search.css">
    <link rel="stylesheet" type="text/css" href="../san_pham/css_thong_tin_duoi.css">
</head>
<style type="text/css">
    table, th, td {
  border: 1px solid;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){
    background-color: #f2f2f2;
 }

 tr:hover {
    background-color: #ddd;
    }

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
#giua{
height: 1000px;
}
</style>
<body>

    <div id="tong">
        <div id="tren">
        <div class="logo">
            <a href="index.php">
                <h1 text-align="center" style="margin-left: 50px ;margin-top: 10px; color: red;">K1.Mark </h1>
            </a>
        </div>
        <div class="timkiem">
            
        </div>

        <div class="dang_nhap">
            <div class="dangnhap">
                
            </div>
            <div class="dang_ky">
            
            </div>
            <div class="Gio_hang">
          <h3>     Chào Bạn </h3>

            </div>
 
        </div>

    </div>
<div id="giua">
   
<?php

require '../connect.php';
$ma = $_SESSION['id']; 
$sql = "select * from hoa_don where ma_khach_hang = '$ma'" ;
$ket_qua = mysqli_query($ket_noi,$sql);
$bai_san_pham = mysqli_fetch_array($ket_qua);
?>

<table text-align="center" style="width: 70%;">
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
            
            <?php mysqli_close($ket_noi); ?>
</div>
<?php require '../footer.php' ?>

    </div>
</body>
</html>

<?php
/*
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
*/?>