<?php

class Sofa
{
    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct()
    {
        self::$instance_count++;
    }
}

class Couch extends Sofa
{
    var $arms = 0;
}

class LoveSeat extends Sofa
{
    var $seats = 2;
}

$sofa = new Sofa();
echo $sofa->seats . "<br />";
echo $sofa->arms . "<br />";
echo "<hr />";

$couch = new Couch();
echo $couch->seats . "<br/>";
echo $couch->arms . "<br />";
echo "<hr />";

$loveseat = new LoveSeat();
echo $loveseat->seats . "<br/>";
echo $loveseat->arms . "<br />";
echo "<hr />";

echo Sofa::$instance_count . "<br>";
