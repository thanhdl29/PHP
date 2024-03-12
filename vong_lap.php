<?php

// vòng lặp For: lặp với số lần xác định trước
// Hiển thị số chẵn, lẻ trong dãy số từ 1->100
// in ra từ 1 đến 100 sau đó kiểm tra chẵn lẻ
// $start = 1;
// $end = 100;
// $resultEven = null; // chẵn
// $resultOdd = null;//lẻ
// $evenCount = 0;
// $oddCount = 0;

// for($i = $start; $i <= $end; $i++){
//     if($i % 2 == 0){
//        // echo "$i là số chẵn<br>";
//         $resultEven.=$i.' ';
//         $evenCount++;
//         if($i==56){
//             break;
//         }
//     }
//     else{
//        // echo "$i là số lẻ<br>";
//        $resultOdd.=$i.' ';
//        $oddCount++;
//     }
// }
// if($evenCount > 0){
//     echo 'Tìm thấy: '.$evenCount.' Số chẵn: '.$resultEven.'<br>';
// }else{
//     echo "Không tìm thấy số chẵn<br>";
// }
// if($oddCount > 0){
//     echo 'Tìm thấy: '.$oddCount.' Số lẻ: '.$resultOdd.'<br>';
// }else{
//     echo "Không tìm thấy số lẻ<br>";
// }


// Tính tổng các số từ 1 đến 100: Viết một chương trình sử dụng vòng lặp for để tính tổng của các số từ 1 đến 100.
// $start = 1;
// $end = 100;
// $sum = 0;

// for($i = $start;$i <= $end;$i++){
//     $sum += $i;
// }
//echo $sum;



// While: Lặp vs số lần 0 xác định trước. Phải có điều kiện để thoát vòng lặp.
// Đếm từ 1 đến 50: Viết một chương trình sử dụng vòng lặp while để in ra các số từ 1 đến 50.
// $i=1;
// while($i<=50){
//     echo $i. '<br>';
//     $i++;
// }

// Tính tổng S = 1+2+3+4+...n
// $n=10;
// $i=1;
// $total = 0;
// while($i<$n){
//     $total+=$i;
//     $i++;
// }
// echo 'Tổng: '.$total.'<br>';



/*
do while:
$i = 1;
do{
    echo $i.'<br>';
    $i++;
}while($i<=10);

Tính tổng S = 1+2+3+4+...n
$total = 0;
$i = 1;
do{
    $total+=$i;
    $i++;
}while($i<=20);
echo 'Tổng = '.$total.'<br>';
*/

/*
  Foreach: in ra các giá trị trong mảng
  $ten = ['thanh', 'hung', 'long'];
foreach ($ten as $value){
 echo $value;
}
$persions=[
    'full_name' => 'Nguyen van a',
    'age' => 34,
    'email' => '122132@gmail.com'
];
foreach($persions as $key => $value){
    echo "$key : $value<br>";
}
*/

for ($i = 1; $i <= 10; $i++) {

    if ($i == 2) {
        continue;
    } else {
        echo "$i là số lẻ<br>";
    }
}
