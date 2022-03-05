<?php session_start();
if(empty($_SESSION['id'])){
    header('location:signin.php?error= Bạn chưa đăng nhập');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="../san_pham/csslogo_search.css">
	<link rel="stylesheet"  type="text/css" href="../san_pham/danh_muc_sanpham.css">
	<link rel="stylesheet"  type="text/css" href="../san_pham/css_thong_tin_duoi.css">
	<link rel="stylesheet" type="text/css" href="css_gio_hang.css">
</head>
<style type="text/css">
    	*{
		margin: 0;
		padding: 0;
	}
	#tong{
		height: 700px;
		width: 100%;
	}
	#giua{
		height: 80%;
		width: 100%;

	}
    #giua > .trai{
        background: red;
        width: 20%;
        height: 100%;
        float: left;
        text-align: center;
    }
    #giua > .trai h1{
        color: green;
    }
    #giua > .trai ul{
        text-align: left;
    }
    #giua > .phai{
        background: pink;
        width: 100%;
        height: 100%;
        text-align: center;
    }

    #duoi{
        height: 20%;
		width: 100%;
        background: black;
    }
    table{
        padding-left: 100px;
    }
    table, th, td {
  border: 0px solid;
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
</style>
<body>
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
			<a href="signing/user.php"> <?php echo "Xin chào, "; echo $_SESSION['name'];?> </a>
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
        <div id="giua">
            <div class="trai">
            <img src="https://img.icons8.com/external-bearicons-glyph-bearicons/64/000000/external-User-essential-collection-bearicons-glyph-bearicons.png"/>
            <h1> <?php 
            echo $_SESSION['name'];
                ?></h1>
                <ul>
                    <li><a href="user.php">Hồ sơ</a></li>
                    <li><a href="don_mua.php">Đơn mua</a></li>
                    <li><a href="doi_mat_khau.php">Đổi mật khẩu</a></li>
                </ul>
            </div>
            <div class="phai">
                <h1>Đơn hàng đã mua</h1>
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
                <th>Tình trạng</th>
            </tr>
            <?php foreach ($ket_qua as  $value) {
                 $ma1 = $value['ma'];
                 $trang_thai = $value['trang_thai'];
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
                <td><?php echo $value['tong_tien']; echo " VNĐ"; ?></td>
                <td>
                    <?php 
                        if($trang_thai==0){ 
                            echo "Đang giao ";
                             }elseif ($trang_thai==1) {
                                echo "Đã giao ";
                            }else{
                                echo "Đã bị huỷ";}
                    ?>
                </td>
             </tr>
            <?php } ?>
            </table>
            
            <?php mysqli_close($ket_noi); ?>
            </div>
            
        </div>
        <div id="duoi"></div>
</div>

</body>
</html>