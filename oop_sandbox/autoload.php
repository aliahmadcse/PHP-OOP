<?php

function my_autoload($class)
{
    if (preg_match('/^\w+$/', $class)) {

        include './classes/' . $class . '.class.php';
    }
}

spl_autoload_register('my_autoload');
$bike = new Unicycle;
$bike->brand = "truk";

echo $bike->brand;
