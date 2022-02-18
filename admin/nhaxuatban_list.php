<?php
include "header.php";
include "leftside.php";

?>
<?php
        $ket_noi = mysqli_connect('localhost','root','','doan1');
     
        mysqli_set_charset($ket_noi,'utf8');   
      $trang = 1;
if(isset($_GET['trang'])){
    $trang = $_GET['trang'];
}
$sql_so_kq =  "select count(*) from nha_san_xuat";
$mang_so_kq = mysqli_query($ket_noi,$sql_so_kq);
$ket_qua_so_kq = mysqli_fetch_array($mang_so_kq);
$so_kq = $ket_qua_so_kq['count(*)'];
$so_kq_1 = 2 ;
$so_trang =  ceil($so_kq/$so_kq_1);
$bo_qua = $so_kq_1*($trang - 1);
$sql = "select * from nha_san_xuat limit $so_kq_1 offset $bo_qua";
$ket_qua = mysqli_query($ket_noi, $sql);       
        ?>

<div class="admin-content-right">
    <div class="table-content">
        <h1>Danh sách nhà xuất bản</h1><br>
        <table>

            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên nhà xuất bản</th>
                 <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

                <th>Tùy chọn</th>
            <?php } ?>
            </tr>

           <?php $i = 0;
           foreach ($ket_qua as $tung_san_pham){
           $i = $i + 1 ; ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $tung_san_pham['ma']  ?></td>
                <td><?php echo $tung_san_pham['ten']  ?></td>
             <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

                <td><a href="nhaxuatban_update.php?ma=<?php echo $tung_san_pham['ma'] ?>">Sửa</a>|
                    <a href="delete_NSX.php?ma=<?php echo $tung_san_pham['ma'] ?>">Xóa</a>
                </td>
            <?php } ?>
            </tr>
            <?php 
            } ?>
        </table>
           <?php  for($i=1; $i<=$so_trang ; $i++) { 
          ?>
          <a href="?trang=<?php echo $i ?>" style = "color: black; " >
              <?php echo $i ?>
          </a>
      <?php } ?>
    </div><?php mysqli_close($ket_noi); ?>
</div>
</section>
<script src="script.js"></script>
</body>

</html>