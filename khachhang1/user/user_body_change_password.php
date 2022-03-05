<?php require 'user_head.php'; ?>
<style>
form #form-right ul li {
    margin-top: 50px;
}
form #form-left ul li {
    margin-top: 50px;
}
</style>
<div class="phai">
<?php 
            $ma = $_SESSION['id'];
            require '../connect.php';
            $sql = "select * from khach_hang where ma = '$ma'";
            $result = mysqli_query($ket_noi,$sql);
            $user = mysqli_fetch_array($result);
        ?>
        <form action="process_doi_mat_khau.php" method="post" style="text-align: center;">
<div id="form-top">
            <div id="form-left">
                        <ul>
                            <li>Mật khẩu hiện tại</li>
                            <li>Mật khẩu mới</li>
                            <li>Xác nhận mật khẩu</li>
                        </ul>
            </div >
                   <div id="form-right">
                    
                        <ul>
                            <li><input type="password" name="mat_khau_hien_tai" id="mat_khau_hien_tai" 
                            placeholder="............................">
                            <span style="color : red" class="span_loi" id="loi_mat_khau_hien_tai"></span>
                        </li>
                        
                            <li>
                            <input type="password" name="mat_khau_moi" id="mat_khau_moi"
                            placeholder="............................">                  
                         <span style="color : red" class="span_loi" id="loi_mat_khau_moi"></span>
                            </li>
                            <li>
                            <input type="password" name="xac_nhan_mat_khau" id="xac_nhan_mat_khau"
                            placeholder="............................">                      
                         <span style="color : red" class="span_loi" id="loi_xac_nhan_mat_khau"></span>
                            </li>
                        </ul>
                    
                    </div>
        </div>
                    <div id="btn">
                    <button onclick="return kiem_tra()">Xác nhận</button>
                    </div>
                    </form>
                    <?php /*
        <form action="process_doi_mat_khau.php" method="post">
                        <div class="input-box">
                        <i ></i>
                        Mật khẩu hiện tại
                        <input type="password" name="mat_khau_hien_tai" id="mat_khau_hien_tai">
                        <br>
                        <span style="color : red" class="span_loi" id="loi_mat_khau_hien_tai"></span>
                    </div>
                    <div class="input-box">
                        <i ></i>
                        Mật khẩu mới
                         <input type="password" name="mat_khau_moi" id="mat_khau_moi">    
                         <br>                     
                         <span style="color : red" class="span_loi" id="loi_mat_khau_moi"></span>
                    </div>
                    <div class="input-box">
                        <i ></i>
                        Xác nhận mật khẩu
                         <input type="password" name="xac_nhan_mat_khau" id="xac_nhan_mat_khau">   
                         <br>                      
                         <span style="color : red" class="span_loi" id="loi_xac_nhan_mat_khau"></span>
                    </div>
                    <div class="btn-box">
                        <button  onclick="return kiem_tra()">
                            Xác nhận
                        </button>
                    </div>
        </form> */?>
                        <script>   
function kiem_tra(){
    let kiem_tra_loi = false;
    let mat_khau_hien_tai = document.getElementById('mat_khau_hien_tai').value;
    if(mat_khau_hien_tai.length < 8)
    {
        document.getElementById('loi_mat_khau_hien_tai').innerHTML = 'Mật khẩu ít nhất có 8 ký tự';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_mat_khau_hien_tai').innerHTML = '';
    }

    let mat_khau_moi = document.getElementById('mat_khau_moi').value;
    if(mat_khau_moi.length === 0)
    {
        document.getElementById('loi_mat_khau_moi').innerHTML = 'Mật khẩu không được để trống';
        kiem_tra_loi = true;
    }else if(mat_khau_moi.length < 8)
    {
        document.getElementById('loi_mat_khau_moi').innerHTML = 'Mật khẩu không được ít hơn 8 ký tự';
        kiem_tra_loi = true;
    }
    else{
        document.getElementById('loi_mat_khau_moi').innerHTML = '';
    }

    let xac_nhan_mat_khau = document.getElementById('xac_nhan_mat_khau').value;
    if(xac_nhan_mat_khau != mat_khau_moi || xac_nhan_mat_khau.length==0){
        document.getElementById('loi_xac_nhan_mat_khau').innerHTML = 'Mật khẩu không khớp';
        kiem_tra_loi = true;
    }

    if(kiem_tra_loi){
        return false;
    }
}
        </script>
            </div>
<?php require 'user_tail.php'; ?>