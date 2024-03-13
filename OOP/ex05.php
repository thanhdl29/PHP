<?php
// Hàm khởi tạo
// kích hoạt khi khởi tạo 1 đối tượng
class ABC {
    // - __construct Function: lập tức đc kích hoạt khi khơiir tạo 1 đối tượng
    public function __construct()
    {
        echo "hello<br>";
    }
    // - __destruct Function: đc gọi ra khi kết thúc 1 kịch bản trong tệp
    public function __destruct()
    {
        echo "Good bye<br>";
    }
    public function test(){
        echo "test<br>";
    }
    
}
echo "begin<br>";
$a = new ABC;

// - Static Methods: gọi trực tiếp phương thức từ tên lớp, theo cú pháp TênLớp::tênPhươngThức() không cần tạo đối tượng
class MathUtils {
    
    // Phương thức tĩnh (static method) để tính giai thừa của một số nguyên dương
    public static function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * self::factorial($n - 1);
        }
    }
    
    // Phương thức tĩnh (static method) để tính tổng của một dãy số nguyên
    public static function sum($numbers) {
        return array_sum($numbers);
    }
}

// Sử dụng phương thức tĩnh (static method) factorial
$result1 = MathUtils::factorial(5);
echo "5! = " . $result1 . "\n"; // In ra: 5! = 120

// Sử dụng phương thức tĩnh (static method) sum
$numbers = [1, 2, 3, 4, 5];
$result2 = MathUtils::sum($numbers);
echo "Sum of numbers = " . $result2 . "\n"; // In ra: Sum of numbers = 15
?>


