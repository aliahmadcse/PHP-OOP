<?php
class Student
{
    public static $grades = ["Freshman", 'Sophomore', 'Junior', 'Senior'];
    private static $total_students = 0;

    public static function motto()
    {
        return "To learn PHP OOP!";
    }

    public static function count()
    {
        return self::$total_students;
    }

    public static function add_student()
    {
        self::$total_students++;
    }
}

echo Student::$grades[0] . "<br/>";
echo Student::motto() . "<br/>";

echo Student::add_student() . "<br/>";
echo Student::count() . "<br/>";

class PartTimeStudent extends Student
{
}

echo PartTimeStudent::$grades[0] . "<br/>";
echo PartTimeStudent::motto() . "<br/>";

PartTimeStudent::$grades[] = "Alumini";
echo implode(', ', Student::$grades);
