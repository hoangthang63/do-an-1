<?php require 'user_head.php'; ?>
<style>
  .phai  table, th, td {
  border: 0px solid;
}
.phai table{
    padding-left: 50px;
}

.phai td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

.phai tr:nth-child(even){
    background-color: #f2f2f2;
 }

 .phai tr:hover {
    background-color: #ddd;
    }

    .phai th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.trang
{
    position: absolute;
    bottom: 20px;
    right: 500px;


}
.trang a{
    display: block;
    padding:1rem;
    /* padding-left: 1rem; */
    /* margin:1.5rem 0; */
    border-radius: 50%;
    background:#333;
    color:white;
    width: 20px;
    height: 20px;
    font-size: 1.1rem;
    text-align: center;
    float: left;
    margin-left: 20px;
    align-items: center;

}
.trang a:hover{
    color: black;
}
</style>
<div class="phai">
                <h1>Đơn hàng đã mua</h1>
<?php

require '../connect.php';

$ma = $_SESSION['id'];
$trang = 1;
if(isset($_GET['trang']))
{
$trang = $_GET['trang'];
}

$sql_so_hoa_don = "select count(*) from hoa_don where ma_khach_hang = '$ma'";
$mang_so_hoa_don = mysqli_query($ket_noi,$sql_so_hoa_don);
$ket_qua_so_hoa_don = mysqli_fetch_array($mang_so_hoa_don);
$so_hoa_don = $ket_qua_so_hoa_don['count(*)'];
$so_hoa_don_tren_1_trang = 4;
$so_trang = ceil($so_hoa_don / 4);
$bo_qua = $so_hoa_don_tren_1_trang * ($trang-1);

$sql = "select * from hoa_don where ma_khach_hang = '$ma' limit $so_hoa_don_tren_1_trang offset $bo_qua" ;
$ket_qua = mysqli_query($ket_noi,$sql);
$bai_san_pham = mysqli_fetch_array($ket_qua);

$sql1 = "select count(*) from hoa_don where ma_khach_hang = '$ma'";
$result = mysqli_query($ket_noi,$sql1);
$number_rows = mysqli_fetch_array($result)['count(*)'];
$tb = '';
if($number_rows == 0){
    $tb = 'Bạn chưa mua sản phẩm nào';

}

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
            <?php if (is_array($ket_qua) || is_object($ket_qua)){ ?>
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
            <?php } ?>
            </table>
            <div class="trang">
            <?php for($i = 1; $i <= $so_trang; $i++) {?>

    <a id="trang" href="?trang=<?php echo $i; ?>">
        <?php echo $i; ?>
    </a>
            <?php } ?>
            </div>

            <p> <?php echo $tb; ?> </p>
            <?php mysqli_close($ket_noi); ?>
            </div>
<?php require 'user_tail.php'; ?>