<?php
include "header.php";
include "leftside.php";


?>
        <?php
        $ket_noi = mysqli_connect('localhost','root','','doan1');
        $sql = "select * from nha_san_xuat";
        $sql1 = "select * from danh_muc";
        mysqli_set_charset($ket_noi,'utf8');
        $ket_qua = mysqli_query($ket_noi,$sql);
        $ket_qua1 = mysqli_query($ket_noi,$sql1);                 
        ?>
<div class="admin-content-right">
    <div class="product-add-content">
        <h2>Thêm Sản phẩm <span style="color: red;">*</span></h2><br>
        <form action="productaddprocces.php" method="POST" enctype="multipart/form-data">
            <label for="">Tên sản phẩm<span style="color: red;">*</span></label> <br>
            <input type="text" name="ten"> <br>
      
            <label for="">Chọn danh mục<span style="color: red;">*</span></label> <br>
            <select required="required" name="danh_muc" id="cartegory_id">
                <option value="">--Chọn--</option>
                
                <?php foreach ($ket_qua1 as $tung_san_pham){?>
                    <option><?php 
                    echo $tung_san_pham['ten'] ?></option>
                <?php }?>
                
                
            </select>
      
            <label for="">Chọn Nhà xuất bản<span style="color: red;">*</span></label> <br>
            <select name="nha_san_xuat" id="nhaxuatban_id">
                <option value="">--Chọn--</option>
                
              <?php foreach ($ket_qua as $tung_san_pham){?>
                    <option><?php 
                    echo $tung_san_pham['ten'] ?></option>
                <?php }?>
                
            </select>

            <label for="">Giá sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="text" name="gia"> <br>
            <label for="">Mô tả<span style="color: red;">*</span></label> <br>
            <textarea class="ckeditor" required name="mo_ta" cols="60" rows="5"></textarea><br>
            <label for="">Ảnh Sản phẩm<span style="color: red;">*</span></label> <br>
            <input required type="file" name="anh"> <br>
            <span style="color: red;"></span>
            <button class="admin-btn" name="submit" type="submit" onclick="ktinput()">Thêm Sản phẩm</button>
        </form>
        <?php mysqli_close($ket_noi); ?>
    </div>
</div>
</section>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script>
// Replace the <textarea id="editor1"> with a CKEditor 4
// instance, using default configuration.
CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserWindowWidth: '1000',
    filebrowserWindowHeight: '700'
});
</script>
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
<script type="text/javascript">
    function ktinput(){
        let anh ;
        anh = document.getElementByName("anh").value;


        let temp = anh.split(".");
        if(temp[1]=="php"){
        console.log(temp[1]);
        
    }
    }    
</script>
</body>

</html>