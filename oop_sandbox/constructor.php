<?php

class Sofa
{
    public static $instance_count = 0;

    public $seats;
    public $arms;

    public function __construct($args = [])
    {
        self::$instance_count++;
        $this->seats = $args['seats'] ?? NULL;
        $this->arms = $args['arms'] ?? NULL;
    }
}

class Couch extends Sofa
{
    // var $arms = 0;
}

class LoveSeat extends Sofa
{
    // var $seats = 2;
}

$sofa = new Sofa(['seats' => 3, 'arms' => 2]);
echo $sofa->seats . "<br />";
echo $sofa->arms . "<br />";
echo "<hr />";

$couch = new Couch(['seats' => 3, 'arms' => 1]);
echo $couch->seats . "<br/>";
echo $couch->arms . "<br />";
echo "<hr />";

$loveseat = new LoveSeat(['seats' => 2, 'arms' => 2]);
echo $loveseat->seats . "<br/>";
echo $loveseat->arms . "<br />";
echo "<hr />";

echo Sofa::$instance_count . "<br>";
