<?php
include "header.php";
include "leftside.php";
?>


<body>

    <div class="admin-content-right">

        <div class="cartegory-add-content">
            <h1>Sửa loại sản phẩm<span style="color: red;">*</span></h1><br>
            <form action="" method="POST">
                <label for="">Vui lòng chọn danh mục<span style="color: red;">*</span></label><br>
                <select name="cartegory_id" id="">
                    <option value="">--Vui lòng chọn danh mục--</option>
                   
                    <option value="">Danh mục
                    </option>
                    
                </select>
                <br> <br>
                <label for="">Sửa loại sản phẩm<span style="color: red;">*</span></label><br>
                <input type="text" value="<?php echo $resultA['brand_name'] ?>" name="brand_name">
                <button class="admin-btn" type="submit">Sửa</button>
            </form>
        </div>
    </div>
    </section>
    <script src="script.js"></script>
</body>

</html>