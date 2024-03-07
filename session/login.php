<?php
session_start();
$_SESSION['login']['username']= 'thanh123.th';
//print_r($_SESSION);
echo $_SESSION['login']['username'];
?>