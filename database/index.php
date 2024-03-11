<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php'; ?>
    <title>Document</title>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Login Form</h3>
                            <form action="" method="post">
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" class="form-control form-control-lg" />
                                    <label class="form-label" for="name">Tên đăng nhập</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Mật khẩu</label>
                                </div>
                                <div class="d-grid">
                              
                                    <input class="btn btn-primary btn-lg" type="submit" value="Đăng nhập" name="btn-log" />
                                </div>
                                <div class="text-center mt-4">
                                    <label>Chưa có tài khoản?</label>
                                    <a href="register.php" class="text-decoration-none"> Đăng ký ngay!</a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php 
include ('./db/connect.php');
if(isset($_POST['btn-log'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password_md5 = md5($password);
    
    $sql = "SELECT * FROM `usser` WHERE username = '$name' AND password = '$password_md5'";
    $reusult = mysqli_query($conn, $sql);
    if(mysqli_num_rows($reusult) == 1){
        $_SESSION['mySession'] = $name;
        header("location:dashboard.php");
    }else{
        echo "Tài khoản hoặc mật khẩu sai";
    }
}
?>