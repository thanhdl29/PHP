<?php
namespace StudentManagement;
class CourseManager {
    private $courses = array();
    

    public function addCourse($course) {
        $this->courses[$course->getCode()] = $course;
        echo "Course " . $course->getName() . " added.<br>";
    }

    public function removeCourse($code) {
        if (isset($this->courses[$code])) {
            unset($this->courses[$code]);
            
            echo "Course with code $code removed.<br>";
        } else {
            echo "Course with code $code not found.<br>";
        }
    }

    public function getCourse($code) {
        if (isset($this->courses[$code])) {
            return $this->courses[$code];
        } else {
            echo "Course with code $code not found.<br>";
            return null;
        }
    }

    public function getAllCourses() {
        return $this->courses;
    }
}
?>