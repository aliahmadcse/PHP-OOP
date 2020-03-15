<?php
class Person{
    var $first_name;
    var $last_name;
    var $age;
}

class Student extends Person{
    var $regis_no;
    var $session;
}

class Programmer extends Person{
    var $known_languages;
    var $is_remote_employee;
}


$p=new Person;
$p->first_name="Ali";
$p->last_name="Ahmad";
