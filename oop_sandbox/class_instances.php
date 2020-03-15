<?php
class Student
{
}


$student1 = new Student;
$student2 = new Student;


echo get_class($student1) . "<br/>";

$class_names = ['Products', 'Student', 'student'];
foreach ($class_names as $class_name) {
    if (is_a($student2, $class_name)) {
        echo "student2 is an instance of the class {$class_name}.<br/>";
    } else {
        echo "student2 is not an instance of the class {$class_name}.<br/>";
    }
}
