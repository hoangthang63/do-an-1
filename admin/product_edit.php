<?php
include "header.php";
include "leftside.php";


?>

<div class="admin-content-right">
    <div class="product-add-content">
        <h2>Sửa Sản phẩm <span style="color: red;">*</span></h2><br>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Tên sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="text" value="" name="sanpham_tieude"> <br>
            <label for="">Mã sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="text" value="" name="sanpham_ma"> <br>
            <label for="">Chọn danh mục<span style="color: red;">*</span></label> <br>
            <select required="required" name="cartegory_id" id="cartegory_id">
                <option value="">--Chọn--</option>
               
                <option value="">Dan muc</option>
            </select>
            <label for="">Chọn Loại sản phẩm<span style="color: red;">*</span></label> <br>
            <select required="required" name="brand_id" id="brand_id">
                <option value="">--Chọn--</option>

            </select>
            <label for="">Chọn Nhà xuất bản<span style="color: red;">*</span></label> <br>
            <select required="required" name="nhaxuatban_id" id="nhaxuatban_id">
                <option value="">--Chọn--</option>
                
                <option value=""></option>
            </select>

            <label for="">Giá sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="text" value="" name="sanpham_gia"> <br>
            <label for="">Chi tiết<span style="color: red;">*</span></label> <br>
            <textarea class="ckeditor" required name="sanpham_chitiet" cols="60" rows="5"></textarea><br>
            <label for="">Ảnh Sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="file" name="sanpham_anh"> <br>
            <span style="color: red;"></span>
            <button class="admin-btn" name="submit" type="submit">Sửa</button>
        </form>
    </div>
</div>
</section>
<script src="script.js"></script>
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