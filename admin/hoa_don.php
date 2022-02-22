<?php
include "header.php";
include "leftside.php";

    $ket_noi = mysqli_connect('localhost','root','','doan1');
     
    mysqli_set_charset($ket_noi,'utf8');   
      $trang = 1;
if(isset($_GET['trang'])){
    $trang = $_GET['trang'];
}
$sql_so_kq =  "select count(*) from hoa_don";
$mang_so_kq = mysqli_query($ket_noi,$sql_so_kq);
$ket_qua_so_kq = mysqli_fetch_array($mang_so_kq);
$so_kq = $ket_qua_so_kq['count(*)'];
$so_kq_1 = 2 ;
$so_trang =  ceil($so_kq/$so_kq_1);
$bo_qua = $so_kq_1*($trang - 1);
$sql = "select 
hoa_don.*, 
khach_hang.ten,
khach_hang.sdt,
khach_hang.dia_chi from hoa_don
join khach_hang
on khach_hang.ma = hoa_don.ma_khach_hang limit $so_kq_1 offset $bo_qua";
$ket_qua = mysqli_query($ket_noi, $sql);       
      
?>
<div class="admin-content-right">
    <div class="table-content">
    	<h1>Danh sách nhân hoá đơn</h1><br>
        <table>

            <tr>
                <th>Mã hoá đơn</th>
                <th>Mã khách hàng</th>
                <th>Thông tin người nhận</th>
                <th>Thông tin người đặt</th>
                <th>Thời gian đặt</th>
                <th>Ghi chú</th>
                <th>Tổng tiền</th>
                <th>Trạng thái đơn</th>
                <th>Sửa/Xem</th>
            </tr>
            <?php foreach ($ket_qua as $value) {
            
             ?>
              <tr>
                <td><?php echo $value['ma']  ?></td>
                <td><?php echo $value['ma_khach_hang'] ?></td>
                <td><?php echo $value['ten_nguoi_nhan'] ?>
                <?php echo $value['sdt_nguoi_nhan'] ?>
                <?php echo $value['dia_chi_nhan_hang'] ?>
                <br>
                     <?php echo $value['sdt'] ?>
                </td>
                <td>
                    <?php echo $value['ten'] ?>
                    <?php echo $value['sdt'] ?>
                    <?php echo $value['dia_chi'] ?>
                   
                </td>
                <td><?php echo $value['thoi_gian_dat'] ?></td>
                <td><?php echo $value['ghi_chu'] ?> </td>
                <td><?php echo $value['tong_tien'] ?></dh>
                    <?php if($value['trang_thai']==0){ 
                    $value['trang_thai'] = 'Đang giao'; }elseif ($value['trang_thai']==1) {
                        $value['trang_thai'] = 'Đã giao';
                    }else{
                         $value['trang_thai'] = 'Huỷ đơn';
                    }?>

                <td><?php echo $value['trang_thai'] ?></td>
                <td><a href="xem_hoa_don.php?ma=<?php echo $value['ma'] ?>">
                    Xem
                </a>/<a href="sua_trang_thai_hoa_don.php?ma=<?php echo  $value['ma']  ?>">
                    Sửa
                </a></td>

              
            </tr>   
             <?php } ?>  
            </table>
            <?php  for($i=1; $i<=$so_trang ; $i++) { 
          ?>
          <a href="?trang=<?php echo $i ?>" style = "color: black; " >
              <?php echo $i ?>
          </a>
      <?php } ?>
    	</div>
     <?php mysqli_close($ket_noi); ?>
</div>
</section>
<script src="script.js"></script>
</body>

</html>