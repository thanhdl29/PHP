<?php
//các lớp khác khi kế thừa lớp trừu tượng sẽ phải định nghĩa các phương thức trừu tượng ấy, Một class chỉ có thể kế thừa 1 lớp trừu tượng\
//Khai báo một phương thức abstract trong abstract class.
abstract class Person
{
    //khai báo một abstract method đúng
    abstract public function getName();

    //Sai vì abstract class không thể viết code xử lý được
    abstract public function getHeight()
    {
    }
}


// Khai báo một phương thức bình thường trong abstract class.
abstract class Person
{ // đúng
    //khai báo một phương thức
    protected function getName()
    {
        //code
    }
}


class People
{
    //sai vì không thể khai báo một phương thức absract trong class bình thường.
    abstract public function getA();
}
//Trong abstract class thuộc tính không được khai báo với từ khóa abstract.
{
    //sai
    abstract public $name;
	//đúng
	public $name;
}
//Không thể khai khởi tạo một abstract class.
abstract class Person
{
    //body
}
//Sai
$person= new Person(); 
//Phải định nghĩa lại các phương thức abstract của abstract class đó khi kế thừa.
abstract class Dongvat
{
    protected $name;

    abstract protected function getName();
}

//class này sai vì chưa định nghĩa lại phương thức abstracs getName
class ConTrau extends Dongvat
{
    //
}

//class này đúng vì đã định nghĩa lại đầy đủ các phương thức abstract
class ConBo extends Dongvat
{
    public function getName()
    {
        return $this->name;
    }
}
?>
// ex..............
<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>