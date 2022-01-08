<?php
include "header.php";
include "leftside.php";

?>

    <?php    
  $ket_noi = mysqli_connect('localhost','root','','doan1');
        $sql = "select * from danh_muc";
        mysqli_set_charset($ket_noi,'utf8');
        $ket_qua = mysqli_query($ket_noi,$sql);                
        ?>
<div class="admin-content-right">
    <div class="table-content">
        <h1>Danh sách danh mục</h1><br>
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Tùy chọn</th>
            </tr>
<?php $i=0;

foreach($ket_qua as $tung_san_pham) {
    $i = $i+1;?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $tung_san_pham['ma'] ?></td>
                <td><?php echo $tung_san_pham['ten'] ?></td>
                <td><a href="">Sửa</a>|
                    <a href="product_delete.php?ma=">Xóa</a>
                </td>
            </tr>
        <?php } ?>
         
        </table>
    </div>
</div>
</section>
<script src="script.js"></script>
</body>

</html>