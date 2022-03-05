<?php session_start(); 
if (empty($_SESSION['vi_tri'])) {
    
    header('location:signing/signin.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <title>Admin</title>
</head>

<body>
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
                    <li><a href="cartegory/cartegory_list.php">Danh sách</a></li>
             <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

                    <li><a href="cartegory/cartegoryadd.php">Thêm</a></li>
                <?php } ?>
                </ul>
            </li>
            
            <li><a href="#"><img style="width:40px" src="icon/donhang.png" alt="">Đơn Hàng</a>
                <ul>
                    <li><a href="hoa_don/hoa_don.php">Danh sách</a></li>
                    <!-- <li><a href="">Thêm</a></li> -->
                </ul>
            </li>
            <li><a href="#"><img style="width:30px" src="icon/menu.png" alt="">Nhà Xuất Bản</a>
                <ul>
                    <li><a href="nhaxuatban/nhaxuatban_list.php">Danh sách</a></li>
       <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

                    <li><a href="nhaxuatban/nhaxuatbanadd.php">Thêm</a></li>
                <?php } ?>
                </ul>
            </li>
            <li><a href="#"><img style="width:30px" src="icon/article.png" alt="">Sản phẩm</a>
                <ul>
                    <li><a href="product/product_list.php">Danh sách</a></li>
                    <li><a href="product/productadd.php">Thêm</a></li>
                </ul>
            </li>
 <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>
            <li><a href="#"><img style="width:30px" src="icon/qltk.jpg" alt="">quản lý người dùng</a>
                <ul>
                    <li><a href="khach_hang/qlkhachhang.php">Danh sách</a></li>
                    <!-- <li><a href="productadd.php">Thêm</a></li> -->
                </ul>
            </li>
        <?php } ?>
    <?php if(isset($_SESSION['vi_tri']) && $_SESSION['vi_tri']==1 ){ ?>

             <li><a href="#"><img style="width:30px" src="icon/qltk.jpg" alt="">Quản lý nhân viên</a>
                <ul>
                  
                    <li><a href="nhan_vien/danh_sach_nhan_vien.php">Danh sách</a></li>
               
                    <li><a href="nhan_vien/them_nhan_vien.php">thêm</a></li>
                </ul>
            </li>
             <?php } ?> 
            <li><a href="signing/edit_password.php"> <img style=" width:30px" src="icon/logout.png" alt="">Đổi mật khẩu</a>

            </li> 
            <li><a href="signing/signout.php"> <img style=" width:30px" src="icon/logout.png" alt="">Đăng Xuất</a>

            </li>
        </ul>
    </div>



<div class="admin-content-right">
    <div class="admin-content-right-bg">
        <img src="icon/adminhihi.png" alt="">
    </div>
</div>
</section>
<section>
</section>
<script src="script.js"></script>
</body>

</html>