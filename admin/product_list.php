<?php
include "header.php";
include "leftside.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>

<body>
    <?php    
  $ket_noi = mysqli_connect('localhost','root','','doan1');
        $sql = "select * from san_pham";
        mysqli_set_charset($ket_noi,'utf8');
        $ket_qua = mysqli_query($ket_noi,$sql);                
        ?>
    <div class="admin-content-right">
        <div class="table-content">
            <h1>Danh sách sản phẩm</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                     
                      <th>Nhà xuất xuất</th>
                    <th>Thể loại</th>
                    <th>Giá</th>

                    <th>Ảnh</th>
                    <th>Tùy chọn</th>
                </tr>
                  <?php foreach ($ket_qua as $tung_san_pham) { ?>
                <tr>
                    <td><?php echo $tung_san_pham['ma'] ?></td>
                    <td><?php echo $tung_san_pham['ten'] ?></td>
                    <td><?php echo $tung_san_pham['nha_san_xuat'] ?></td>
                    <td><?php echo $tung_san_pham['danh_muc'] ?></td>
                    <td><?php echo $tung_san_pham['gia'] ?></td>
                    <td><img src="<?php echo $tung_san_pham['anh'] ?>" height ="80" width="40"></td>    
                    <td><a href="product_edit.php?ma=<?php 
                         echo $tung_san_pham['ma']?>">Sửa</a>/<a
                         href="product_delete.php?ma=<?php 
                         echo $tung_san_pham['ma']?>">Xóa</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    </section>
    <script src="script.js"></script>
    <?php 

    mysqli_close($ket_noi); ?>
</body>

</html>