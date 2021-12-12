<?php
include "header.php";
include "leftside.php";

?>



<body>

    <div class="admin-content-right">

        <div class="cartegory-add-content">
            <h1>Thêm loại sản phẩm<span style="color: red;">*</span></h1><br>
            <form action="" method="POST">
                <label for="">Vui lòng chọn danh mục<span style="color: red;">*</span></label><br>
                <select name="cartegory_id" id="">
                    <option value="">--Vui lòng chọn danh mục--</option>
                    
                    <option value="">
                    </option>
                   
                </select>
                <br> <br>
                <label for="">Vui lòng điền loại sản phẩm<span style="color: red;">*</span></label><br>
                <input name="brand_name" type="text" placeholder="Nhập tên danh mục">
                <button class="admin-btn" type="submit">Thêm</button>
            </form>
        </div>
    </div>
    </section>
    <script src="script.js"></script>
</body>

</html>