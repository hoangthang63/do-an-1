<?php
include "header.php";
include "leftside.php";

$ket_noi = mysqli_connect('localhost','root','','doan1');

mysqli_set_charset($ket_noi,'utf8');   
       
$ma = $_GET['ma'];
    $sql = "select * from hoa_don
        where ma = '$ma'";
        
    $ket_qua = mysqli_query($ket_noi, $sql);
    $bai_san_pham = mysqli_fetch_array($ket_qua); ?>
?>
<div class="admin-content-right">
    <div class="table-content">
    	<h1>Danh sách nhân viên</h1><br>
        <table>

            <tr>
                <th>Mã hoá đơn</th>
                <th>Mã khách hàng</th>
                <th>Tên </th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th>Tổng tiền</th>
                <th>Trạng thái đơn</th>
                <th></th>
            </tr>
          

               
               <tr>
                <td><?php echo $bai_san_pham['ma']  ?></td>
                <td><?php echo $bai_san_pham['ma_khach_hang'] ?></td>
                <td><?php echo $bai_san_pham['ten_nguoi_nhan'] ?></td>
                <td><?php echo $bai_san_pham['sdt_nguoi_nhan'] ?></td>
                <td><?php echo $bai_san_pham['dia_chi_nhan_hang'] ?></td>
                <td><?php echo $bai_san_pham['ghi_chu'] ?> </td>
                <td><?php echo $bai_san_pham['tong_tien'] ?></td>
                    
                       <form action="process_update_hoa_don.php" method="POST">
                        <input type="hidden" name="ma" value="<?php echo $ma ?>">
                        <td>
                            <select name="trang_thai">
                                <option>Đang giao</option>
                                <option>Đã giao</option>
                                <option>Huỷ đơn</option>
                            </select>
                        </td>   
                        <td>
                            <button>xác nhận</button>
                        </td>
                    </form>

                </tr>   
           
        </table>
        
  </div>
  <?php mysqli_close($ket_noi); ?>
</div>
</section>
<script src="script.js"></script>
</body>

</html>