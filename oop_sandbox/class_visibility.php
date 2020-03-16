<?php
class Student
{
    public $first_name;
    public $last_name;
    public $country = "None";
    protected $registration_id;
    private $tuition = 0.0;


    public function full_name()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function hello_world()
    {
        return "Hello World";
    }

    protected function hello_family()
    {
        return "Hello Family";
    }
    private function hello_me()
    {
        return "Hello me";
    }
}

class PartTimeStudent extends Student
{
    public function hello_parent()
    {
        return $this->hello_family();
    }
}

// $student1 = new Student;
$student1 = new PartTimeStudent;
$student1->first_name = 'John';
$student1->last_name = 'Recardo';
$student1->tuition = 400;
echo $student1->tuition . "<br/>";

echo $student1->first_name . " " . $student1->last_name . "<br />";

echo "<br/>Full Name: <br/>";
echo $student1->full_name() . "<br/>";

echo $student1->hello_parent() . "<br/>";

$class_methods = get_class_methods('Student');
echo "Class methods:<br/>";
echo "<pre>";
print_r($class_methods);
echo "</pre>";


if (method_exists('Student', 'say_hello')) {
    echo "Method say_hello exist in student class<br/>";
} else {
    echo "Method say_hello does not exist in student class<br/>";
}
