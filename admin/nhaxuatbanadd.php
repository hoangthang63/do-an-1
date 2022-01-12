<?php
include "header.php";
include "leftside.php";

?>

<body>
    <div class="admin-content-right">
       
        <div class="cartegory-add-content">
            <h1>Thêm Nhà xuất bản<span style="color: red;">*</span></h1><br>
            <form action="NSXproces_insert.php" method="post">
                Mã nhà sản xuất
                <br>
                <input type="text" name="ma" placeholder="Nhập mã">
                <br>
                <label for="">Tên nhà xuất bản<span style="color: red;">*</span></label><br>
                <input type="text" name="ten" placeholder="Nhập tên">
                <br> <br>
                <button class="admin-btn" type="submit">Thêm</button>
            </form>
        </div>
    </div>
    </section>
    <script src="script.js"></script>
</body>
    
</html>