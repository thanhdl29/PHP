<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php">Đăng nhập</a>
    <a href="logout.php">Đăng xuất</a>
    <hr>
    <a href="index.php">Trang chủ</a>
    <a href="product.php">Sản phẩm</a>
    <a href="account.php">Tài khoản</a>
    <hr>
    <p>Sản phẩm</p>
    <?php
    if(isset($_SESSION['login']['username'])){
        echo $_SESSION['login']['username'];
    }else{
        echo 'Bạn cần đăng nhập';
    }
    //echo $_SESSION['login']['username'];
    ?>
</body>
</html>