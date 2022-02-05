<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        .span_loi{
            color: red;
        }
    </style>
</head>
<body>
<?php
session_start();
    if(isset($_SESSION['error']))
    {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
?>
    <form method="POST" action="process_signup.php">
        <h1>Form đăng ký</h1>
        Tên
        <input type="text" name="name" id="ten"><span class="span_loi" id="loi_ten"></span>
        <br>
        Giới tính
        <input type="radio" name="gender" value="nam">Nam
        <input type="radio" name="gender" value="nữ">Nữ
        <span class="span_loi" id="loi_gioi_tinh"></span>
        <br>
        Email
        <input type="email" name="email" id="email"><span class="span_loi" id="loi_email"></span>
        <br>
        Mật khẩu
        <input type="password" name="password" id="mat_khau"><span class="span_loi" id="loi_mat_khau"></span>
        <br>
        <button type="submit" onclick="return kiem_tra()">Đăng Ký</button>
    </form>

<script>
    function kiem_tra(){
    
    //ten
    let kiem_tra_loi = false;
    let ten = document.getElementById('ten').value;
    if(ten.length === 0)
    {
        document.getElementById('loi_ten').innerHTML = 'Tên không được để trống';
        kiem_tra_loi = true;
    }else{
        let regex_ten = /[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/;
        if(regex_ten.test(ten) == false){
            document.getElementById('loi_ten').innerHTML = 'Tên không hợp lệ';
            kiem_tra_loi = true;
        }else{
        document.getElementById('loi_ten').innerHTML = '';
    }
    }
    
    //gioi tinh
    let mang_gioi_tinh = document.getElementsByName('gender');
    let kiem_tra_gioi_tinh = false;

    for(let i = 0; i < mang_gioi_tinh.length; i++){
        if(mang_gioi_tinh[i].checked){
            kiem_tra_gioi_tinh = true;
        }
    }

    if(kiem_tra_gioi_tinh == false){
        document.getElementById('loi_gioi_tinh').innerHTML = 'Giới tính không được để trống';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_gioi_tinh').innerHTML = '';
    }
    //email
    let email = document.getElementById('email').value;
    if(email.length === 0)
    {
        document.getElementById('loi_email').innerHTML = 'Email không được để trống';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_email').innerHTML = '';
    }

    //mat khau
    let mat_khau = document.getElementById('mat_khau').value;
    if(mat_khau.length === 0)
    {
        document.getElementById('loi_mat_khau').innerHTML = 'Mật khẩu không được để trống';
        kiem_tra_loi = true;
    }else if(mat_khau.length < 8)
    {
        document.getElementById('loi_mat_khau').innerHTML = 'Mật khẩu không được ít hơn 8 ký tự';
        kiem_tra_loi = true;
    }
    else{
        document.getElementById('loi_mat_khau').innerHTML = '';
    }

    if(kiem_tra_loi){
        return false;
    }

    }


</script>
</body>
</html>