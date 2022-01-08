<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="csslogo_search.css">
    <link rel="stylesheet" type="text/css" href="danh_muc_sanpham.css">
    <link rel="stylesheet" type="text/css" href="css_phanchinh.css">
    <link rel="stylesheet" type="text/css" href="css_thong_tin_duoi.css">
    <style type="text/css">
        #tong{

            width : 100% ;
            height : 2310px
        }
        

    </style>
</head>
<body>
    <div id="tong">

        <?php include 'search_sign.php' ?>
        <?php
        $ket_noi = mysqli_connect('localhost','root','','doan1');
        $sql = "select * from san_pham";
        mysqli_set_charset($ket_noi,'utf8');
        $ket_qua = mysqli_query($ket_noi,$sql);                
        ?>
        <?php include 'danh_muc.php' ?>
        <div id="giua">
            <div class="vien_trai"></div>

            <div class="giua">

                <div class="san_pham">
                    <div class="tieu_de">
                       <div class="loai_san_pham">
                           <h1>Bút</h1>
                       </div>
                       <div class="all">
                        <a href="#">
                            <h3>Xem tất cả</h3 >
                        </a>
                    </div>
                </div>          
                <?php foreach ($ket_qua as $tung_san_pham) { ?>

                   <div class="mat_hang">         
                      <a href="sanpham.php?ma=<?php     echo $tung_san_pham['ma'] ?>">
                        <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                        <div class="name">
                            <?php echo $tung_san_pham['ten']?> 
                        </div>
                        <br>
                        <div class="Gia"> Giá :<?php echo $tung_san_pham['gia']?> VND</div>
                    </a>
                </div>

            <?php } ?>
        </div>
           <div class="san_pham">
                    <div class="tieu_de">
                       <div class="loai_san_pham">
                           <h1>Bút</h1>
                       </div>
                       <div class="all">
                        <a href="#">
                            <h4>Xem tất cả</h4>
                        </a>
                    </div>
                </div>          
                <?php foreach ($ket_qua as $tung_san_pham) { ?>
                    
                   <div class="mat_hang">         
                      <a href="#">
                        <img src="<?php echo $tung_san_pham['anh'] ?> " height="70%" width="100%">
                        <div class="name">
                            <?php echo $tung_san_pham['ten']?> 
                        </div>
                        <br>
                        <div class="Gia"> Giá :<?php echo $tung_san_pham['gia']?> VND</div>
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
