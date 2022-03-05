<?php require 'user_head.php'; ?>
<div class="phai">
            <?php
    if(isset($_SESSION['message'])) { ?>

        <?php   
// PHP program to pop an alert   
// message box on the screen   
  // Function definition   
  $message = $_SESSION['message'];
function function_alert($message) {   
 // Display the alert box    
    echo "<script type ='text/JavaScript'>";  
    echo "alert('$message')";  
    echo "</script>";   
}   
// Function call   
function_alert($message);   
  ?>  
  <?php unset($_SESSION['message']); ?>
        <?php } ?>
        <?php 
            $ma = $_SESSION['id'];
            require '../connect.php';
            $sql = "select * from khach_hang where ma = '$ma'";
            $result = mysqli_query($ket_noi,$sql);
            $user = mysqli_fetch_array($result);
        ?>
            <form action="process_update_user.php" method="post" style="text-align: center;">
        <div id="form-top">
            <div id="form-left">
                        <ul>
                            <li>Tên đăng nhập</li>
                            <li>Tên</li>
                            <li>Giới tính</li>
                            <li>Số điện thoại</li>
                            <li>Địa chỉ</li>
                        </ul>
            </div >
                   <div id="form-right">
                    
                        <ul>
                            <li><?php echo $user['email'] ?></li>
                            <li><input type="text" value="<?php echo $user['ten'] ?>" name="name"></li>
                            <li>
                            <input type="radio" name="gender" value="nam" <?php echo ($user['gioi_tinh']=='nam')?'checked':'' ?> >Nam
                            <input type="radio" name="gender" value="nữ" <?php echo ($user['gioi_tinh']=='nữ')?'checked':'' ?>>Nữ
                            </li>
                            <li><input type="number" name="phone_number" value="<?php echo $user['sdt']?>"></li>
                            <li><input type="text" value="<?php echo $user['dia_chi'] ?>" name="address"></li>
                        </ul>
                    
                    </div>
        </div>
                    <div id="btn">
                    <button>Cập nhật thông tin</button>
                    </div>
            </form>
            </div>
<?php require 'user_tail.php'; ?>