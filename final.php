<?php
//Ngăn chặn sự kế thừa của một lớp
final class MyClass {
  public $name = "John";
}

// This code will throw an error
class AnotherClass extends MyClass{};


//Khi chúng ta khai báo một phương thức là final thì không có một phương thức nào có thể override(ghi đè lại được).
class ConNguoi
{
    private $soChan = 2;

    final public function getSoChan()
    {
        return $this->soChan;
    }
}

//Sai vì không thể override lại final phương thức
class NguoiLon extends ConNguoi
{
    public function getSoChan()
    {

    }
}
//Fatal error: Cannot override final method ConNguoi::getSoChan()


?>