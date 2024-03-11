<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn->connect_error){
    die("kết nối không thành công: ".$conn->connect_error);
}

?>