<?php
include "../header.php";
include "leftside.php";


?>
<?php 
require '../connect.php' ;
$ma = $_GET['ma'];
$sql = "select * from san_pham where ma = '$ma'";
$ket_qua = mysqli_query($ket_noi,$sql) ;
$sql1 = "select * from danh_muc";
$ket_quadanhmuc = mysqli_query($ket_noi,$sql1) ;

$sql_NSX = "select * from nha_san_xuat";
$ket_quaNSX = mysqli_query($ket_noi,$sql_NSX);
$truy_van = mysqli_fetch_array($ket_qua); ?>
<div class="admin-content-right">
      <div class="product-add-content">
        <?php if(isset($truy_van)){ ?>
        <h2>Sửa Sản phẩm <span style="color: red;">*</span></h2><br>
        <form action="product_edit_procesc.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="ma" value="<?php echo $ma ?>">
            <label for="">Tên sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="text"   name="ten" value="<?php echo $truy_van['ten'] ?>"><br>
            <label for="">Chọn danh mục<span style="color: red;">*</span></label> <br>
            <select required="required" name="danh_muc" id="cartegory_id">
                <option value=""><?php echo $truy_van['danh_muc'] ?></option>
                  
              <?php foreach ($ket_quadanhmuc as $tung_san_pham){?>
                    <option><?php 
                    
                    echo $tung_san_pham['ten'] ;?></option>
                <?php }?>
            </select>
            <label for="">Chọn Nhà sản xuất<span style="color: red;">*</span></label> <br>
             <select name="nha_san_xuat" id="nhaxuatban_id">
                <option value=""><?php echo $truy_van['nha_san_xuat'] ?></option>
                
              <?php foreach ($ket_quaNSX as $tung_san_pham){?>
                    <option><?php 
                
                    echo $tung_san_pham['ten'] ;?></option>
                <?php }?>
                
            </select>
            <label for="">Giá sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="text" value="<?php echo $truy_van['gia'] ?>" name="gia"> <br>
            <label for="">Mô tả<span style="color: red;">*</span></label> <br>
            <textarea class="ckeditor" required name="mota" cols="60" rows="5"> <?php echo $truy_van['mo_ta'] ?></textarea>
            <br>
            <label for="">Ảnh Sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="file" name="anh" value=""> <br>
            <span style="color: red;"></span>
            <button class="admin-btn" name="submit" type="submit">Sửa</button>
        </form>
    <?php }else{
        echo "Sản phẩm này không tồn tại"
    } ?>
    </div>
</div>
<?php mysqli_close($ket_noi); ?>
<script src="../script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $("#cartegory_id").change(function() {
        // alert($(this).val()) 
        var x = $(this).val()
        $.get("ajax/productadd_ajax.php", {
            cartegory_id: x
        }, function(data) {
            $("#brand_id").html(data)
        })
    })

})
</script>
</body>

</html>