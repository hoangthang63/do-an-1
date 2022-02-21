<?php session_start(); ?>
<?php
require_once "header.php";
require_once "leftside.php";


$ket_noi = mysqli_connect('localhost','root','','doan1');

mysqli_set_charset($ket_noi,'utf8');


$trang = 1;
if(isset($_GET['trang'])){
    $trang = $_GET['trang'];
}
$sql_so_danh_muc =  "select count(*) from danh_muc";
$mang_so_danh_muc = mysqli_query($ket_noi,$sql_so_danh_muc);
$ket_qua_so_danh_muc = mysqli_fetch_array($mang_so_danh_muc);
$so_danh_muc = $ket_qua_so_danh_muc['count(*)'];
$so_danh_muc_1 = 2 ;
$so_trang =  ceil($so_danh_muc/$so_danh_muc_1);
$bo_qua = $so_danh_muc_1*($trang - 1);
$sql = "select * from danh_muc limit $so_danh_muc_1 offset $bo_qua";
$ket_qua = mysqli_query($ket_noi, $sql);
?>
<div class="admin-content-right">
    <div class="table-content">
        <h1>Danh sách danh mục</h1><br>
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Tên danh mục</th>
                 <?php if($_SESSION['vi_tri']==1){ ?>
                <th>Tùy chọn</th>
            <?php } ?>
            </tr>
            <?php $i=0;

            foreach($ket_qua as $tung_san_pham) {
                $i = $i+1;?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $tung_san_pham['ma'] ?></td>
                    <td><?php echo $tung_san_pham['ten'] ?></td>
                     <?php if($_SESSION['vi_tri']==1){ ?>
                    <td><a href="cartegoryedit.php?ma=<?php echo $tung_san_pham['ma'] ?>">Sửa</a>/
                        <a href="cartegory_delete.php?ma=<?php echo $tung_san_pham['ma'] ?>">Xóa</a>
                    </td>
                <?php } ?>
                </tr>
            <?php }
        $loi = mysqli_error($ket_noi); // in ra lỗi 
        echo $loi;
        ?>

  </table>
    <?php  for($i=1; $i<=$so_trang ; $i++) { 
          ?>
          <a href="?trang=<?php echo $i ?>" style = "color: black; " >
              <?php echo $i ?>
          </a>
      <?php } ?>
  <?php mysqli_close($ket_noi) ?>
</div>
</div>
</section>
<script src="script.js"></script>
</body>

</html>