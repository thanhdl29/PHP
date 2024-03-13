<?php
require_once 'Persion.php';
require_once 'Enrollable.php';
require_once 'Student.php';
require_once 'Course.php';
require_once 'CourseManager.php';
require_once 'StudentManager.php';

use StudentManagement\Student;
use StudentManagement\Course;
use StudentManagement\CourseManager;
use StudentManagement\StudentManager;

// Tạo danh sách khóa học và quản lý chúng
$course1 = new Course();
$course1->setName("PHP Programming");
$course1->setCode("PHP101");
$course1->setDuration("6 weeks");

$course2 = new Course();
$course2->setName("Web Development");
$course2->setCode("WEB101");
$course2->setDuration("8 weeks");

$courseManager = new CourseManager();
$courseManager->addCourse($course1);
$courseManager->addCourse($course2);
$courseManager->removeCourse("WEB101");

// Tạo danh sách học viên và quản lý chúng
$student1 = new Student();
$student1->setName("John Doe");
$student1->setAge(25);

$student2 = new Student();
$student2->setName("Jane Smith");
$student2->setAge(30);


$studentManager = new StudentManager();
$studentManager->addStudent($student1);
$studentManager->addStudent($student2);
//$studentManager->removeStudent("John Doe");

// Đăng ký học viên vào các khóa học
$student1->enroll($course1);
$student1->enroll($course2);
$student2->enroll($course2);

// Hiển thị thông tin
echo "Courses:<br>";
foreach ($courseManager->getAllCourses() as $code => $course) {
    echo "Code: $code, Name: " . $course->getName() . ", Duration: " . $course->getDuration() . "<br>";
}

echo "<br>Students:<br>";
foreach ($studentManager->getAllStudents() as $name => $student) {
    echo "Name: $name, Age: " . $student->getAge() . " Sex: ".$student->getSex()."<br>";
    echo "Enrolled Courses:<br>";
    foreach ($student->getCourses() as $course) {
        echo "- " . $course->getName() . "<br>";
    }
    echo "<br>";
}

?>