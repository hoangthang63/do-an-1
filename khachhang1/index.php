<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="san_pham/csslogo_search.css">
    <link rel="stylesheet" type="text/css" href="san_pham/danh_muc_sanpham.css">
    <link rel="stylesheet" type="text/css" href="san_pham/css_phanchinh.css">
    <link rel="stylesheet" type="text/css" href="san_pham/css_thong_tin_duoi.css">
    <style type="text/css">
        #tong 
        {
            width: 100%;
            height: 2510px;
            background: #EEEEEE;
        }

        .timkiem input[class="tim_kiem"] {
            width: 70%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            padding: 12px 20px 12px 40px;
            display: block;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;

        }
        ul >li > ul >li{
            width: 100%;
            background: white;
            height: 200px;
            width: 150px;
            text-align: center;
        } 
        #duoi{
            width :100% ;
		height :4%;
		background :#333333;
		color: white;
		margin-top:122px;
        }
     .mat_hang >   img {
    float: left;
    
    object-fit: cover;
}
    </style>
</head>

<body>
    <div id="tong">

        <?php include 'search_sign.php' ?>
        <?php include 'san_pham/danh_muc.php' ?>
        <?php  require_once 'connect.php';  ?>
        <?php
    if(isset($_SESSION['error']))
    { ?>
    <p style="color: red"> <?php echo  $_SESSION['error']; ?> </p>
        
    <?php unset($_SESSION['error']); ?>
        <?php }?>
        <?php  
        /*
    $trang = 1;
    if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
    }
    $sql_so_danh_muc =  "select count(*) from danh_muc";
    $mang_so_danh_muc = mysqli_query($ket_noi,$sql_so_danh_muc);
    $ket_qua_so_danh_muc = mysqli_fetch_array($mang_so_danh_muc);
    $so_danh_muc = $ket_qua_so_danh_muc['count(*)'];
    $so_danh_muc_1 = 2 ;
    $so_trang =  ceil($so_danh_muc/$so_danh_muc_1);
    $bo_qua = $so_danh_muc_1*($trang - 1);
    $sql = "select * from danh_muc limit $so_danh_muc_1 offset $bo_qua";
    $ket_qua = mysqli_query($ket_noi, $sql);
    */
    ?>
        <div id="giua">
            <div class="vien_trai"></div>

            <div class="giua">
                <a href="#" style="position: fixed; bottom: 100px; right:0;"><img src="https://img.icons8.com/stickers/100/000000/chevron-up.png"/></a>
                <?php
                /*
            <?php foreach ($ket_qua as $tung_danh_muc) { ?>
                <?php
                $temp = $tung_danh_muc['ten'];
                $sql1 = "select * from san_pham WHERE danh_muc = '$temp' Limit 3;";
                $ket_qua1 = mysqli_query($ket_noi, $sql1);
                ?>
                    <?php } ?>
                */ ?>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="but">Bút</h1>
                        </div>
                        <div class="all">
                        <a href="tim_kiem.php?danh_muc=Bút">
                                <h3>Xem tất cả</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    // $temp = $tung_danh_muc['ten'];
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Bút' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> "  width=  "230px";  height= "220px">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Giá :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                    
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="vo">Vở</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=Vở">
                                <h3>Xem tất cả</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Vở' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " width=  "230px";  height= "220px">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Giá :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="may_tinh_bo_tui">Máy tính bỏ túi</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=Máy tính bỏ túi">
                                <h3>Xem tất cả</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Máy tính bỏ túi' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " width=  "230px";  height= "220px">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Giá :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="giay_in_an">Giấy in ấn</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=Giấy in ấn">
                                <h3>Xem tất cả</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Giấy in ấn' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " width=  "230px";  height= "220px">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Giá :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="khac">Khác</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=Khác">
                                <h3>Xem tất cả</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Khác' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " width=  "230px";  height= "220px">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Giá :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
            
                <?php /* for($i=1; $i<=$so_trang ; $i++) { 
  ?>
  <a href="?trang=<?php echo $i ?>" style = "color: black; " >
      <?php echo $i ?>
  </a>
<?php } */?>

            </div>
            <div class="vien_phai"></div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <?php mysqli_close($ket_noi); ?>
</body>

</html>