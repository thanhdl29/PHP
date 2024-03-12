<?php
// //echo "we talk about Array<br>";

$numbers = [1,2,3,4,5,6,7,8];
foreach($numbers as $number){
    echo $number . ' ';
}
echo '<hr>';
// mảng liên hợp
$countries = ['Việt Nam' => 'Hà Nội', 'Nhật Bản'=>'Tokyo', 'Trung Quốc' => 'Bắc Kinh'];
foreach ($countries as $country => $capital){
    echo 'Country: '.$country.' Capital: '.$capital.'<br>';
}
echo '<hr>';
//Xoá phần tử mảng
$fruits=['apple','banana','orange','mango'];
unset($fruits[2]);
print_r($fruits);
echo '<hr>';
// Lấy phần tử đầu tiên và cuối cùng
$numbers = [1,2,3,4,5,6,7,8];
$first = reset($numbers);
$last = end($numbers);
echo 'Phần tử đầu tiên trong mảng là: '.$first.'<br>';
echo 'Phần tử cuối cùng trong mảng là: '.$last;
echo '<hr>';
//Chèn phần tử vào mảng
$fruits=['apple','banana','orange','mango'];
array_splice($fruits, 2,0,'lemon');
print_r($fruits);
echo '<hr>';
//Xử lý JSON string: chuyển đổi chuỗi JSON thành một mảng và ngược lại.
$json_string = '{"name": "John", "age": 30, "city": "New York"}';
$array_from_json = json_decode($json_string, true);
print_r($array_from_json);
echo '<br>';
$json_from_array = json_encode($array_from_json);
echo $json_from_array;
echo '<hr>';
//sắp xếp mảng:sắp xếp mảng số nguyên theo thứ tự tăng dần và giảm dần.
$numbers = [1,2,3,4,5,6,7,8];
sort($numbers);
print_r($numbers);
echo '<br>';
rsort($numbers);
print_r($numbers);
echo '<hr>';
// Tìm kiếm trong mảng
$fruits=['apple','banana','orange','mango'];
$key = array_search('banana', $fruits);
echo 'Vị trí của Banana: '.$key;
echo '<hr>';
//Quản lý bán hàng
// Mảng sản phẩm
$products = [
    ["name" => "Laptop", "price" => 1000, "quantity" => 10],
    ["name" => "Phone", "price" => 500, "quantity" => 20],
    ["name" => "Tablet", "price" => 300, "quantity" => 15]

];
foreach ($products as $product) {
    echo "Product: " . $product['name'] . ", Price: $" . $product['price'] . ", Quantity: " . $product['quantity'] . "<br>";
}