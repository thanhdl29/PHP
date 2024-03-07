<?php
//Định nghĩa lớp
class Dog
{
    // Thuộc tính
    public $name;
    public $breed;

    // Phương thức 
    public function bark()
    {
        return "Woof!";
    }
}

// Tạo đối tượng
$myDog = new Dog();

// Thiết lập thuộc tính
$myDog->name = "Buddy";
$myDog->breed = "Labrador";

// Gọi
// echo "Tên chó: " . $myDog->name . "<br>";
// echo "Giống chó: " . $myDog->breed . "<br>";
// echo "Tiếng sủa: " . $myDog->bark() . "<br>";


class User
{
    
    public $name;
    public $email;
    public $age;
    public $password;
    
    public function __construct($name, $email, $age, $password)
    {
        
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }

    function set_name($name)
    {
        $this->name = $name;
    }
    
    function get_name()
    {
        return $this->name;
    }
}

$user1 = new User( '','jon@gmail.com', 23, '123456');
$user2 = new User('jon1', 'jon1@gmail.com', 26, '123456');


class Employee extends User
{
    public function __construct(
        $name,
        $email,
        $age,
        $password,
        $title 
    ) {
        parent::__construct($name, $email, $age, $password);///
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
    
}
$employee1 = new Employee(
    'Taylor',
    'taylor12@gmail.com',
    30,
    '123456',
    'Sales manager'
);
echo $employee1->get_name();
//print_r($user1);
echo $user1->get_name();

