<?php
class Student
{
    var $first_name;
    var $last_name;
    var $country = "None";

    function say_hello()
    {
        return "Hello World";
    }
}


$student1 = new Student;
$student1->first_name = 'John';
$student1->last_name = 'Recardo';

$student2 = new Student;
$student2->first_name = 'ALi';
$student2->last_name = 'Ahmad';

echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

echo $student1->say_hello() . "<br/>";

$class_methods = get_class_methods('Student');
echo "Class Vars:<br/>";
echo "<pre>";
print_r($class_methods);
echo "</pre>";


if (method_exists('Student', 'say_hello()')) {
    echo "Method say_hello does exist in student class<br/>";
} else {
    echo "Method say_hello exist in student class<br/>";
}
