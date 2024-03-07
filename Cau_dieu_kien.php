<?php

//Kiểm tra số chẵn lẻ: Viết một chương trình để kiểm tra một số nhập vào từ người dùng là số chẵn hay số lẻ.

$n = readline("hãy nhập 1 số nguyên bất kỳ: ");
if($n%2 ==0){
    echo "số bạn vừa nhập là số chẵn";

}else {
    echo "Số bạn vừa nhập là số lẻ";
}



/*
Phân loại độ tuổi: Dựa vào độ tuổi nhập vào, phân loại người dùng là trẻ em, thanh niên, người trưởng thành, hay người cao tuổi.
$t = readline("Hãy nhập số tuổi của bạn: ");
if($t<16){
    echo "Bạn là trẻ con";
}elseif($t <= 30){
    echo "bạn là thanh niên";
}elseif($t <=60){
    echo "Bạn thuộc độ tuổi trung niên";
}else{
    echo "Bạn thuộc hội người già";
}
*/

/*
Phân loại điểm số: Tạo một chương trình phân loại điểm số của học sinh. Nếu điểm trên 8, kiểm tra xem có phải điểm 10 không để phân biệt học sinh xuất sắc. Nếu điểm dưới 5, kiểm tra xem có phải điểm 0 không để cảnh báo học sinh cần cố gắng hơn.

$diem = readline("Nhập điểm của học sinh: ");

if ($diem < 0 || $diem > 10) {
    echo "Điểm số không hợp lệ vui lòng nhập điểm tùe 0 -> 10";
} elseif ($diem >= 8) {
    if ($diem == 10) {
        echo "Học sinh xuất sắc";
    } else {
        echo "Học sinh giỏi";
    }
} elseif ($diem >= 5) {
    if ($diem < 6.5) {
        echo "Học sinh trung bình";
    } elseif ($diem >= 6.5) {
        echo "Học sinh khá";
    }
} else{
    if ($diem==0) {
        echo "Học sinh cần cố gắng hơn";
    }else{
        echo "Học sinh yếu";
    }
}
*/

/*
Chuyển đổi ngày trong tuần: Viết một chương trình nhập vào một số từ 1 đến 7 và sử dụng switch case để in ra tên ngày tương ứng trong tuần (1 là Thứ Hai, 7 là Chủ Nhật).
*/
$day = readline("Nhập vào 1 số từ 1 đến 7: ");
switch($day){
    case 1: 
        echo "Hôm nay là thứ 2";
        break;
    case 2: 
        echo "Hôm nay là thứ 3";
        break;
    case 3: 
        echo "Hôm nay là thứ 4";
        break;
    case 4: 
        echo "Hôm nay là thứ 5";
        break;
    case 5: 
        echo "Hôm nay là thứ 6";
        break;
    case 6: 
        echo "Hôm nay là thứ 7";
        break;
    case 7: 
        echo "Hôm nay là chủ nhật";
        break;

    default:
        echo "Vui lòng nhập trong khoảng 1 -> 7";
        break;
}
