<?php
namespace StudentManagement;

class StudentManager {
    private $students = array();

    public function addStudent($student) {
        $this->students[$student->getName()] = $student;
        echo "Student " . $student->getName() . " added.<br>";
    }

    public function removeStudent($name) {
        if (isset($this->students[$name])) {
            unset($this->students[$name]);
            echo "Student $name removed.<br>";
        } else {
            echo "Student $name not found.<br>";
        }
    }

    public function getStudent($name) {
        if (isset($this->students[$name])) {
            return $this->students[$name];
        } else {
            echo "Student $name not found.<br>";
            return null;
        }
    }

    public function getAllStudents() {
        return $this->students;
    }
}
?>