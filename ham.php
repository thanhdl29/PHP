<?php
/*
Hàm:thực hiện chức năng trong chương trình, tạo ra các khối mã có thể được gọi lại và tái sử dụng
function sum($a,$b){
    echo $a+$b;
}

sum(55,35);
sum(12,35);
*/
//Hàm gọi hàm
//Tính tổng số chẵn 1+2+3+...+n

function check_even($i){
    if($i%2==0){
        return true;
    }else{
        return false;
    }
}
function total_even($n){
    $s = 0;
    for($i = 1; $i <= $n; $i++){
        if(check_even($i)){
             $s+=$i;
        }
       
    }
    return $s;
}
echo total_even(5);
