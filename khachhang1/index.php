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
    </style>
</head>

<body>
    <div id="tong">

        <?php include 'search_sign.php' ?>
        <?php include 'san_pham/danh_muc.php' ?>
        <?php  require_once 'connect.php';  ?>
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
                            <h1 id="but">B??t</h1>
                        </div>
                        <div class="all">
                        <a href="tim_kiem.php?danh_muc=B??t">
                                <h3>Xem t???t c???</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    // $temp = $tung_danh_muc['ten'];
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'B??t' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Gi?? :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                    
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="vo">V???</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=V???">
                                <h3>Xem t???t c???</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'V???' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Gi?? :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="may_tinh_bo_tui">M??y t??nh b??? t??i</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=M??y t??nh b??? t??i">
                                <h3>Xem t???t c???</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'M??y t??nh b??? t??i' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Gi?? :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="giay_in_an">Gi???y in ???n</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=Gi???y in ???n">
                                <h3>Xem t???t c???</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Gi???y in ???n' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Gi?? :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="khac">Kh??c</h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=Kh??c">
                                <h3>Xem t???t c???</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Kh??c' Limit 3;";
                    mysqli_set_charset($ket_noi, 'utf8');
                    $ket_qua = mysqli_query($ket_noi, $sql);
                    ?>
                    <?php foreach ($ket_qua as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="san_pham/sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Gi?? :<?php echo $tung_san_pham['gia'] ?> VND</div>
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