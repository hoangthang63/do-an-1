<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>K.mart</title>
    <link rel="stylesheet" href="san_pham/csslogo_search.css">
    <link rel="stylesheet" href="san_pham/danh_muc_sanpham.css">
    <link rel="stylesheet" href="san_pham/css_phanchinh.css">
    <link rel="stylesheet" href="san_pham/css_thong_tin_duoi.css">
    <style type="text/css">
        #tong {

            width: 100%;
            height: 2310px
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
    
    </style>
</head>

<body>
    <div id="tong">


     <?php include 'search_sign.php' ?>
     <?php include 'san_pham/danh_muc.php' ?>
     <?php  require 'connect.php';  ?>
     <?php  
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
    ?>
    <div id="giua">
        <div class="vien_trai"></div>
        <div class="giua">
            <?php foreach ($ket_qua as $tung_danh_muc) { ?>
                <?php
                $temp = $tung_danh_muc['ten'];
                $sql1 = "select * from san_pham WHERE danh_muc = '$temp' Limit 3;";
                $ket_qua1 = mysqli_query($ket_noi, $sql1);
                ?>

                <div class="san_pham">
                    <div class="tieu_de">
                        <div class="loai_san_pham">
                            <h1><?php echo $tung_danh_muc['ten'] ?></h1>
                        </div>
                        <div class="all">
                            <a href="tim_kiem.php?danh_muc=<?php echo $tung_danh_muc['ten']; ?>">
                                <h3>Xem tất cả</h3>
                            </a>
                        </div>
                    </div>
                    <?php foreach ($ket_qua1 as $tung_san_pham) { ?>

                        <div class="mat_hang">
                            <a href="sanpham.php?ma=<?php echo $tung_san_pham['ma'] ?>">
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
            <?php } ?>




    <?php  for($i=1; $i<=$so_trang ; $i++) { 
  ?>
  <a href="?trang=<?php echo $i ?>" style = "color: black; " >
      <?php echo $i ?>
  </a>
<?php } ?>
        </div>
        <div class="vien_phai"></div>
    </div>
    <?php include 'footer.php' ?>
</div>

<?php mysqli_close($ket_noi); ?>
</body>

</html>
