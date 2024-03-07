<?php
/*
Toán tử và biểu thức
- Biểu thức: Tập hợp toán tử và toán hạng
    + Toán hạng: Các biến hay giá trị đc thực hiện
    + Toán tử: Các phép toán: cộng, trừ, nhân, chia, so sánh,...
- Toán tử gán: =, +=, -=, *=, /=, %=, .=
- Toán tử số học: +, -,*,**,/,%,++,--
- Toán tử so sánh: >,<,>=,<=,==,===,!=
- Toán tử lý luận(logic):&&, ||,!(Độ ưu tiên NOT=>AND=>OR)  
*/

// Biểu thức
$a = 1;
$b = 5;
$sum = $a + $b + 10;
//echo $sum;

//Toán tủ gán
$age = 30; // $ten_bien = gia_tri
//- ".="
$str = 'xin chào ';
//$str = $str.'Bạn khoẻ không';
$str .= 'Bạn khoẻ không';
echo $str.'<br>';

//Toán tử số học
$a = 10;
$b = '12';
$sum = $a + $b;
//echo $sum;
//Toán tử tăng 1 đơn vị (++)
$a = 0;
$a++;
++$a;
//echo $a;

//Toán tử so sánh
$a = 10;
$b = '10';
//$check = $a==$b;
$check = $a===$b;
//var_dump($check);

// Toán tử bậc 3 
$x = (5>3) ? ('5 lớn hơn 3') : ('5 không lớn hơn 3');
echo $x;