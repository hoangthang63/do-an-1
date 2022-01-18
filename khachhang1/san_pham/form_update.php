<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    $ma = $_GET['ma'];

    require_once '../connect.php';
    $sql = "select * from san_pham";
    $ket_qua = mysqli_query($ket_noi, $sql);
    
    $san_pham = mysqli_fetch_array($ket_qua);
    ?>
    <form method="post" action="process_update.php">
        <input type="hidden" name="ma" value="<?php echo $san_pham['ma']?>">
        Tên
        <input type="text" name="ten" value="<?php echo $san_pham['ten']?>">
        <br>
        Mô tả
        <textarea name="mo_ta"><?php echo $san_pham['mo_ta']?></textarea>
        <br>
        Giá
        <input type="number" name="gia" value="<?php echo $san_pham['gia']?>">
        <br>
        Link ảnh
        <input type="text" name="anh" value="<?php echo $san_pham['anh']?>">
        <br>
        Mã nhà sản xuất
        <input type="text" name="ma_nha_san_xuat" value="<?php echo $san_pham['ma_nha_san_xuat']?>">
        <br>
        <button>Thêm</button>
    </form>
</body>

</html>