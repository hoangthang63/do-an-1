<?php
include "header.php";
include "leftside.php";

?>



<body>

    <div class="admin-content-right">
        <!-- <h1>Thêm sản phẩm</h1><br> -->
        <div class="cartegory-add-content">
            <form action="cartegoryaddprocse.php" method="POST">
                <label for="">Vui lòng thêm danh mục<span style="color: red;">*</span></label><br>
                <input name="ten" type="text" placeholder="Nhập tên danh mục">
                <button class="admin-btn" type="submit">Thêm</button>
            </form>
        </div>

    </div>
    </section>
    <script src="../script.js"></script>
</body>

