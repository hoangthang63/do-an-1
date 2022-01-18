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
            height: 2510px
        }
    </style>
</head>

<body>
    <div id="tong">

        <?php include 'san_pham/search_sign.php' ?>
        <?php include 'san_pham/danh_muc.php' ?>
        <div id="giua">
            <div class="vien_trai"></div>

            <div class="giua">

                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1 id="but">Bút</h1>
                        </div>
                        <div class="all">
                            <a href="#">
                                <h3>Xem tất cả</h3>
                            </a>
                        </div>
                    </div>
                    <?php
                    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
                    $sql = "SELECT * FROM `san_pham` WHERE danh_muc = 'Bút' Limit 3;";
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
                            <a href="#">
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
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
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
                            <a href="#">
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
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
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
                            <a href="#">
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
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
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
                            <a href="#">
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
                                <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                                <div class="name">
                                    <?php echo $tung_san_pham['ten'] ?>
                                </div>
                                <br>
                                <div class="Gia"> Giá :<?php echo $tung_san_pham['gia'] ?> VND</div>
                            </a>
                        </div>

                    <?php } ?>
                </div>


            </div>
            <div class="vien_phai"></div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <?php mysqli_close($ket_noi); ?>
</body>

</html>