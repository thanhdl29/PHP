<?php
/*
Chuỗi : Danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép
 */
 $exStr = 'Hello, My name is "thanh"';
 $exStr1 = 'Word';

 /*Các hàm xử lý chuỗi */
 //1. Thêm ký tự escape vào phía trước các ký tự mong muốn
 $str = addcslashes($exStr, 'lo');
 echo $str;
 echo '<br>';

 $str = addslashes($exStr); // add escape(\) vào phía trức ',",\
 echo $str;
 echo '<br>';

 //2. Loại bỏ tất cả escape trong chuỗi
 $str = stripslashes($exStr);
 echo $str;
 echo '<br>';

 //3. Chuyển chuỗi thành mảng
 $str = 'hi how are you';
 $arr = explode(' ', $str);
 print_r($arr);
 echo '<br>';

 //4. Chuyển mảng thành chuỗi
 $str = implode(' ', $arr);
 echo $str;
 echo '<br>';

 //5. Lặp chuỗi theo số lần xác định
 $str = 'Unicode';
 $str = str_repeat($str, 3);
 echo $str;
 echo '<br>';

 //6. Tìm kiêm và thay thế
 $str = 'xin chào thế giới';
 $str = str_replace('giới', ' ', $str);
 echo $str;