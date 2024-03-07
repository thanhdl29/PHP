<?php

require 'db/connect.php';
if (isset($_POST['btn-reg'])) {
    echo "Đã submit";

    $username = $_POST['name'];
    $password = $_POST['password'];
    $birthday = $_POST['birthdayDate'];
    $gender = $_POST['gender'];
    $phonnumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    if (!empty($username) && !empty($password) && !empty($birthday) && !empty($gender) && !empty($phonnumber) && !empty($email)) {
        print_r($_POST);

        $sql = "INSERT INTO `usser`(`username`, `password`, `birthday`, `gender`, `phonenumber`,`email`) VALUES('$username', md5('$password'), '$birthday',  '$gender', '$phonnumber', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Lưu trữ thành công";
        } else {
            echo "Lỗi {$sql}" . $conn->error;
        }
    } else {
        echo "bạn vui lòng nhập đầy đủ thông tin";
    }
}
