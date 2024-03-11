<?php
include('./db/connect.php');

$id = $_GET['id'];
$sql = "SELECT * FROM `usser` WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['btn-upd'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $birthday = $_POST['birthdayDate'];
    $gender = $_POST['gender'];
    $phonnumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    $sql = "UPDATE `usser` SET `username` = '$username', `password` = md5('$password'),`birthday` = '$birthday',`gender` = '$gender',`phonenumber` = '$phonnumber',`email` = '$email' WHERE id=$id";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: dashboard.php");
    }
    else{
        echo "Failed: ".mysqli_error($conn);
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('./bootstrap.php'); ?>
    <title>Document</title>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                       



                        <div class="card-body p-4 p-md-5 ">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Edit Form</h3>
                            <form action="" method="post">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Tên đăng nhập</label>
                                        <input type="text" name="name" class="form-control form-control-lg" required  value="<?php  echo $row['username']?>"/>

                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Mật khẩu</label>
                                        <input type="text" name="password" class="form-control form-control-lg" required autocomplete="off" value="<?php  echo $row['password']?>"/>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                            <input type="text" class="form-control form-control-lg" name="birthdayDate" id="birthdayDate" required autocomplete="off" 
                                            value="<?php  echo $row['birthday']?>"/>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1">Gender: </h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="female" required autocomplete="off" <?php  echo ($row['gender']=='Female')?'checked':'';?>/>
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="male" required autocomplete="off" <?php  echo ($row['gender']=='Male')?'checked':'';?>/>
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="other" required autocomplete="off" <?php  echo ($row['gender']=='Other')?'checked':'';?>/>
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Email</label>
                                            <input type="email" name="email" class="form-control form-control-lg" required autocomplete="off" value="<?php  echo $row['email']?>"/>

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <input type="tel" name="phoneNumber" class="form-control form-control-lg" required autocomplete="off" value="<?php  echo $row['phonenumber']?>"/>

                                        </div>

                                    </div>
                                </div>


                                <div class="mt-2 pt-2 text-center">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Chỉnh sửa" name="btn-upd" />
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