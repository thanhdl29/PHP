<?php
namespace StudentManagement;


class Student extends Person implements Enrollable {
    private $courses = array();

    public function enroll($course) {
        $this->courses[] = $course;
        echo $this->name . " enrolled in course: " . $course->getName() . "<br>";
    }
    public function getCourses() {
        return $this->courses;
    }
}
?>