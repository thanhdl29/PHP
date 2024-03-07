<?php
session_start();
// Cập nhật username: thanh123.th => kienthanh.vn
echo $_SESSION['login']['username'] = 'kienthanh.vn';

?>