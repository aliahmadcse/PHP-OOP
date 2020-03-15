<?php
class Bicycle
{
    const POUNDS_PER_KG = 2.204;
    const KGS_PER_POUND = 0.453;
    var $brand        = "Suhrab";
    var $model        = "s86";
    var $year         = "2020";
    var $description;
    var $weight_kg;

    function name()
    {
        return "{$this->brand} {$this->model} {$this->year}";
    }

    function weight_lbs()
    {
        return $this->weight_kg * self::POUNDS_PER_KG;
    }

    function set_weight_lbs($weight_in_lbs)
    {
        $this->weight_kg = $weight_in_lbs * self::KGS_PER_POUND;
    }
}


$bicycle1 = new Bicycle();
$bicycle1->weight_kg = 10;

$bicycle2 = new Bicycle();
$bicycle2->weight_kg = 8;

echo $bicycle1->name() . "<br/>";

echo $bicycle1->weight_lbs() . "<br/>";
echo $bicycle2->weight_lbs() . "<br/>";

$bicycle1->set_weight_lbs(22.04);
echo $bicycle1->weight_kg;
