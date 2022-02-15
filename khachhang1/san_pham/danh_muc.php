      
<div id="danh_muc" >
    <?php
    $ket_noi = mysqli_connect('localhost', 'root', '', 'doan1');
    mysqli_set_charset($ket_noi, 'utf8');
    $sql = "select * from danh_muc limit 4";
    $ket_qua = mysqli_query($ket_noi,$sql);            
    ?> 
    <ul>
    <li>
       
    </li>
    <?php foreach ($ket_qua as $value) {  ?>


        <li>
            <a href="tim_kiem.php?danh_muc=<?php echo $value['ten'] ?>">
                <h3><?php echo $value['ten'] ?></h3>
            </a>
        </li> 
    <?php } ?>
    <li>
        <a href="#">
            <h3>Khác</h3>
        </a>
    <?php 
    
    $sql1 = "select * from danh_muc ";
    $ket_qua1 = mysqli_query($ket_noi,$sql1);    
    ?>
    <ul>
       <?php foreach ($ket_qua1 as $value) { ?>
        <li>
            <a href="tim_kiem.php?danh_muc=<?php echo $value['ten'] ?>">
               <b> <?php echo $value['ten'] ?> </b>
            </a>
        </li> 
    <?php } ?>
    </ul>
</li>
</ul>
</div>


