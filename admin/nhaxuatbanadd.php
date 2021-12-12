<?php
include "header.php";
include "leftside.php";

?>



<body>

    <div class="admin-content-right">

        <div class="cartegory-add-content">
            <h1>Thêm Nhà xuất bản<span style="color: red;">*</span></h1><br>
            <form action="" method="POST">
                <label for="">Tên nhà xuất bản<span style="color: red;">*</span></label><br>
                <input name="nhaxuatban_ten" type="text" placeholder="Nhập tên">
                <br> <br>
                <!-- <label for="">Logo minh họa<span style="color: red;">*</span></label><br>
                <input name="brand_name" type="file" placeholder="Nhập tên danh mục"> -->
                <button class="admin-btn" type="submit">Thêm</button>
            </form>
        </div>
    </div>
    </section>
    <script src="script.js"></script>
</body>

</html>