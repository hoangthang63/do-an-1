<?php
include "header.php";
include "leftside.php";
 $ket_noi = mysqli_connect('localhost','root','','doan1');
mysqli_set_charset($ket_noi,'utf8');
      $trang = 1;
if(isset($_GET['trang'])){
    $trang = $_GET['trang'];
}
$sql_so_kq =  "select count(*) from nhan_vien";
$mang_so_kq = mysqli_query($ket_noi,$sql_so_kq);
$ket_qua_so_kq = mysqli_fetch_array($mang_so_kq);
$so_kq = $ket_qua_so_kq['count(*)'];
$so_kq_1 = 2 ;
$so_trang =  ceil($so_kq/$so_kq_1);
$bo_qua = $so_kq_1*($trang - 1);
$sql = "select * from nhan_vien limit $so_kq_1 offset $bo_qua";
$ket_qua = mysqli_query($ket_noi, $sql);   
?>

<div class="admin-content-right">
    <div class="table-content">
        <h1>Quản lý Nhân Viên</h1><br>
        <table>
            <tr>
                <th>Stt</th>
                <th>Email</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Chức vụ</th>

            </tr>
            <?php if(isset($ket_qua)){ ?>
            <?php 
            $i = 0;
            foreach ($ket_qua as $value ){
                $i++; 
               ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $value['ten'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['sdt'] ?></td>
                    <td><?php echo $value['dia_chi'] ?></td>
                    <?php if($value['cap_do']==0){ ?>
                    <td><?php echo 'Nhân Viên' ?></td>
                <?php } else{?>
                    <?php echo 'Quản lý' ?>
                <?php } ?>
                </tr>
                <?php  } ?> 
                <?php }else{ ?>
                    <h1>Không tồn tại nhân viên</h1>
                <?php } ?>         
        </table>
                   <?php  for($i=1; $i<=$so_trang ; $i++) { 
          ?>
          <a href="?trang=<?php echo $i ?>" style = "color: black; " >
              <?php echo $i ?>
          </a>
      <?php } ?>
        </div>
    </div>
</section>
<script src="script.js"></script>
</body>

</html>