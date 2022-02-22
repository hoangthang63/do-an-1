<?php
include "header.php";
include "leftside.php";

?>

<body>
    <?php 
    require 'connect.php';
    $ma = $_GET['ma'];
    $sql = "select * from nha_san_xuat where ma = '$ma'";
    $ket_qua = mysqli_query($ket_noi,$sql) ;
    $truy_van = mysqli_fetch_array($ket_qua);
    ?>
  
    <div class="admin-content-right">
        <div class="cartegory-add-content">
              <?php if(isset($truy_van)){ ?>
            <h1>Sửa nhà xuất bản<span style="color: red;">*</span></h1><br>
            <form action="nhaxuatban_update_procces.php" method="post">
                Mã nhà sản xuất
                <br>
                <input type="text" name="ma" value="<?php echo $truy_van['ma'] ?>">
                <br>
                <label for="">Tên nhà xuất bản <span style="color: red;">*</span></label><br>
                <input type="text" name="ten" value="<?php echo $truy_van['ten']?>">
                <br> <br>
                <button class="admin-btn" type="submit">Thêm</button>
            </form>
        <?php } else{?>
            <h1>Nhà xuất bản theo id này  không tồn tại</h1>
        <?php } ?>
        </div>
    </div>
    </section><?php mysqli_close($ket_noi); ?>
    <script src="script.js"></script>
</body>
    
</html>