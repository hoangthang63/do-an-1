<?php
include "../header.php";
include "leftside.php";

?>



    <div class="admin-content-right">
        <!-- <h1>Thêm sản phẩm</h1><br> -->
        <div class="cartegory-add-content">
            <form action="them_nhan_vien_process.php" method="POST">
                <label for=""><h1>Thêm nhân viên</h1><span style="color: red;">*</span></label><br>
                Tên nhân viên
                <br>
                <input name="ten" type="text" >
                <br>
                Số điện thoại
                <br>
                <input name="sdt" type="number" ><br>
                Địa chỉ
                <br>
                <input name="dia_chi" type="text" ><br>
                Giới tính
                <br>
                <select name="gioi_tinh">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select><br>
                Ngày sinh
                <br>
                <input name="ngay_sinh" type="text" ><br>
                Email
                <br>
                <input name="email" type="email" ><br>
                Mật khẩu
                <br>
                <input name="mat_khau" type="password" ><br>
                Vị trí
                <br>
                <select name="vi_tri">
                    <option>Nhân viên</option>
                    <option>Quản lý</option>
               </select> <br>
                <button class="admin-btn" type="submit">Thêm</button>
            </form>
        </div>

    </div>
    </section>
    <script src="../script.js"></script>
</body>
</html>
