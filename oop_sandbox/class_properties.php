<?php
class Student
{
    var $first_name;
    var $last_name;
    var $country = "None";
}


$student1 = new Student;
$student1->first_name = 'John';
$student1->last_name = 'Recardo';

$student2 = new Student;
$student2->first_name = 'ALi';
$student2->last_name = 'Ahmad';

echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

$class_vars = get_class_vars('Student');
echo "Class Vars:<br/>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student2);
echo "Object Vars:<br/>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if (property_exists('Student', 'first_name')) {
    echo "Property first name exist in student class<br/>";
} else {
    echo "Property first name exist in student class<br/>";
}
