<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>
<form method="post" action="process_signin.php">
    Email
    <input type="email" name='email'>
    <br>
    Mật khẩu
    <input type="password" name='password'>
    <br>
    <button>Đăng nhập</button>
</form>
</body>
</html>