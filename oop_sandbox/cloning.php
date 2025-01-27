<?php
class Beverage
{
    public $name;

    public function __construct()
    {
        echo "New beverage was created <br/>";
    }

    public function __clone()
    {
        echo "Existing beverage was copied <br/>";
    }
}

$a = new Beverage();
$a->name = "pepsi";
echo $a->name . "<br />";
echo "<hr/>";

$b = clone $a;
echo $b->name . "<br/>";
echo "<hr/>";

$b->name = 'tea';

echo $a->name . "<br />";
echo $b->name . "<br/>";
echo "<hr/>";

$c = $b;
$c->name = "juice";

echo $a->name . "<br />";
echo $b->name . "<br/>";
echo $c->name . "<br/>";
echo "<hr/>";
