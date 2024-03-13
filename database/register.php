<?php include('./db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php include './bootstrap.php'; ?>
    <title>Document</title>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5 ">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registration Form</h3>
                            <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Tên đăng nhập</label>
                                        <input type="text" name="name" class="form-control form-control-lg" required autocomplete="off" />

                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Mật khẩu</label>
                                        <input type="text" name="password" class="form-control form-control-lg" required autocomplete="off"/>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                            <input type="text" class="form-control form-control-lg" name="birthdayDate" id="birthdayDate" required autocomplete="off"/>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1">Gender: </h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="female" required autocomplete="off"/>
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="male" required autocomplete="off"/>
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="other" required autocomplete="off"/>
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Email</label>
                                            <input type="email" name="email" class="form-control form-control-lg" required autocomplete="off"/>

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <input type="tel" name="phoneNumber" class="form-control form-control-lg" required autocomplete="off"/>

                                        </div>

                                    </div>
                                </div>


                                <div class="mt-2 pt-2 text-center">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Đăng ký" name="btn-reg"/>
                                </div>
                                <div class="text-center mt-4">
                                    <label>Đẵ có tài khoản</label>
                                    <a href="index.php" class="text-decoration-none"> Đăng nhập</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function() {
            $("#birthdayDate").datepicker({
                dateFormat: 'yy-mm-dd' // Định dạng ngày tháng năm
            });
        });
    </script>
</body>

</html>
<?php
if (isset($_POST['btn-reg'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $birthday = $_POST['birthdayDate'];
    $gender = $_POST['gender'];
    $phonnumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    if ($username != "" && $password != "" && $birthday != "" && $gender != "" && $phonnumber != "" && $email != "") {

        $query = "INSERT INTO `usser`(`username`, `password`, `birthday`, `gender`, `phonenumber`,`email`) 
                    VALUES('$username', md5('$password'), '$birthday',  '$gender', '$phonnumber', '$email')";
        $data = mysqli_query($conn, $query);
        if ($data) {
            echo 'Đăng ký thành công';
        } else {
            echo 'final';
        }
    } else {
        echo "Vui lòng nhập đầy đủ thông tin";
    }
}
?>