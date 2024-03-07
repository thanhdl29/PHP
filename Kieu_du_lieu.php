<?php
//1. Kiểu số nguyên (INT):
$age = 20.5;

$age = (int)$age; //ép kiểu
//
$check = is_int($age);
//var_dump($check);
//echo '<br>';

//2. Kiểu dữ liệu Boolean(logic)
$check = 1;
$check = (bool)$check;
$checkBool = is_bool($check);
//var_dump($checkBool);
echo '<br>';

//3. Kiểu dữ liệu số thực (Float)
$fee = 10;
//$fee = (float)$fee;
//var_dump($fee);
//echo '<br>';
//var_dump(is_float($fee));
echo '<br>';

//4. Kiểu dữ liệu chuỗi
$message = 10.1;
$message = (string)$message;
$checkString = is_string($message);

var_dump($checkString);

//5. Kiểu dữ liệu mảng(array)
$carArr = [];
$carArr = (array)$carArr;
$checkArr = is_array($carArr);
// var_dump($carArr);
// var_dump($checkArr);

//6. Kiểu NULL(rỗng)
$total = null;
$checkNull = is_null($total);
// var_dump($total);
// var_dump($checkNull);

//7. Kiểu dữ liệu Resource : Lưu giữ tham chiếu tới các hàm, tài nguyên bên ngoài PHP: file, curl, database
//8. kiểu đối tượng object
$data = [
    'Hoàng'
];
 $data = (object)$data;
// var_dump($data);

$customerObject = new stdClass();///
$customerObject->age= 30;
//var_dump($customerObject);
