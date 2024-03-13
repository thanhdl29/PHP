<?php
class Employee {
    protected $name;
    protected $position;
    protected $salary;

    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getInfo() {
        return "Name: " . $this->name . ", Position: " . $this->position . ", Salary: $" . $this->salary;
    }
}

class Manager extends Employee {
    private $department;

    public function __construct($name, $position, $salary, $department) {
        parent::__construct($name, $position, $salary);
        $this->department = $department;
    }

    public function getManagerInfo() {
        return $this->getInfo() . ", Department: " . $this->department;
    }
}

$manager = new Manager("John Doe", "Manager", 60000, "IT");
echo $manager->getManagerInfo() . "\n";

// parent: gọi đến hàm của class cha.
