<?php
include "header.php";
include "leftside.php";

?>


<body>

    <div class="admin-content-right">
        <h1>Sửa nhà xuất bản</h1><br>
        <div class="cartegory-add-content">
            <form action="" method="POST">
                <input name="nhaxuatban_ten" value="<?php echo $result['nhaxuatban_ten'] ?>" type="text"
                    placeholder="Nhập tên ">
                <button class="admin-btn" type="submit">Sửa</button>
            </form>
        </div>
    </div>
    </section>
    <script src="script.js"></script>
</body>

</html>