
<section class="admin-content row space-between">
    <div class="admin-content-left">
        <div class="header-top-left">
            <a href="index.php">
                <p style="color: red;">Admin</p>
            </a>
        </div>
        <ul>
            <li><a href="index.php"> <img style="width:30px" src="icon/admin.png" alt="">Chào:Admin</a>
                
            <li><a href="#"><img style="width:30px" src="icon/options.png" alt="">Danh Mục</a>
                <ul>
                    <li><a href="cartegory_list.php">Danh sách</a></li>
             <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

                    <li><a href="cartegoryadd.php">Thêm</a></li>
                <?php } ?>
                </ul>
            </li>
            
            <li><a href="#"><img style="width:40px" src="icon/donhang.png" alt="">Đơn Hàng</a>
                <ul>
                    <li><a href="hoa_don.php">Danh sách</a></li>
                    <!-- <li><a href="">Thêm</a></li> -->
                </ul>
            </li>
            <li><a href="#"><img style="width:30px" src="icon/menu.png" alt="">Nhà Xuất Bản</a>
                <ul>
                    <li><a href="nhaxuatban_list.php">Danh sách</a></li>
       <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

                    <li><a href="nhaxuatbanadd.php">Thêm</a></li>
                <?php } ?>
                </ul>
            </li>
            <li><a href="#"><img style="width:30px" src="icon/article.png" alt="">Sản phẩm</a>
                <ul>
                    <li><a href="product_list.php">Danh sách</a></li>
                    <li><a href="productadd.php">Thêm</a></li>
                </ul>
            </li>
 <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>
            <li><a href="#"><img style="width:30px" src="icon/qltk.jpg" alt="">quản lý người dùng</a>
                <ul>
                    <li><a href="qlkhachhang.php">Danh sách</a></li>
                    <!-- <li><a href="productadd.php">Thêm</a></li> -->
                </ul>
            </li>
        <?php } ?>
    <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

             <li><a href="#"><img style="width:30px" src="icon/qltk.jpg" alt="">Quản lý nhân viên</a>
                <ul>
                  
                    <li><a href="danh_sach_nhan_vien.php">Danh sách</a></li>
               
                    <li><a href="them_nhan_vien.php">thêm</a></li>
                </ul>
            </li>
             <?php } ?> 
            <li><a href="signing/signout.php"> <img style=" width:30px" src="icon/logout.png" alt="">Đăng Xuất</a>

            </li>
        </ul>
    </div>