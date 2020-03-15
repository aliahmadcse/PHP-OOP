<?php
class User
{
    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function full_name()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}

class Customer extends User
{
    var $city;
    var $state;
    var $country;

    function location()
    {
        return "{$this->city} {$this->state} {$this->country}";
    }
}

class AdminUser extends User
{
    var $is_admin = true;

    function full_name()
    {
        return "{$this->first_name} {$this->last_name} (Admin)";
    }
}

$u = new User;
$u->user_name = "Jerry";
$u->first_name = "John";
$u->last_name = "Kern";

$c = new Customer;
$c->user_name = "Joe";
$c->first_name = "Doe";
$c->last_name = "Carry";
$c->city = "New York";
$c->state = "New York";
$c->country = "United States";

echo $u->full_name() . "<br/>";
echo $c->full_name() . "<br/>";

echo $c->location() . "<br />";

echo get_parent_class($u) . "</br>";
echo get_parent_class($c) . "</br>";

if (is_subclass_of($c, "User")) {
    echo "Instance is a subclass of User <br/>";
}

$parent = class_parents($c);

echo implode(', ', $parent) . "<br/>";
