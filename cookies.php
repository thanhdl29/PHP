<?php
/* Cookies: đc lưu ở trình duyệt, xác nhận thông tin ng dùng
set đc thời gian cụ thể 
ví dụ lưu trong 1day:
setcookies('user','hotb', time()+86400);
lưu lượng data truyền tải: tất cả
*/
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
