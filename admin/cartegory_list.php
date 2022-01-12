<?php
include "header.php";
include "leftside.php";

?>

    <?php    
        $ket_noi = mysqli_connect('localhost','root','','doan1');
        
        mysqli_set_charset($ket_noi,'utf8');
        $sql = "select * from danh_muc";
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
                <td><a href="cartegoryedit.php?ma=<?php echo $tung_san_pham['ma'] ?>">Sửa</a>/
                    <a href="cartegory_delete.php?ma=<?php echo $tung_san_pham['ma'] ?>">Xóa</a>
                </td>
            </tr>
        <?php }
        $loi = mysqli_error($ket_noi); // in ra lỗi 
echo $loi;
 ?>
         
        </table>
        <?php mysqli_close($ket_noi) ?>
    </div>
</div>
</section>
<script src="script.js"></script>
</body>

</html>