<?php
class Bicycle
{
    const POUNDS_PER_KG = 2.204;
    const KGS_PER_POUND = 0.453;

    public $brand        = "Suhrab";
    public $model        = "s86";
    public $year         = "2020";
    public $description;
    private $weight_kg;
    protected $wheels = 2;

    public function name()
    {
        return "{$this->brand} {$this->model} {$this->year}";
    }

    public function set_weight_kg($weight)
    {
        $this->weight_kg = $weight;
    }

    public function get_weight_kg()
    {
        return "It has weight {$this->weight_kg} kg";
    }

    public function weight_lbs()
    {
        return $this->weight_kg * self::POUNDS_PER_KG . "lbs";
    }

    public function set_weight_lbs($weight_in_lbs)
    {
        $this->weight_kg = $weight_in_lbs * self::KGS_PER_POUND;
    }

    public function wheel_details()
    {
        $wheel_string = $this->wheels == 2 ? "wheels" : "wheel";
        return "It has {$this->wheels} {$wheel_string}";
    }
}


class Unicycle extends Bicycle
{
    protected $wheels = 1;
}

$bicycle1 = new Bicycle();
$unicycle1 = new Unicycle;

echo $bicycle1->wheel_details() . "<br/>";
echo $unicycle1->wheel_details() . "<br/>";
echo "<hr/>";

$bicycle1->set_weight_kg(1);
echo $bicycle1->get_weight_kg() . "<br/>";
echo $bicycle1->weight_lbs() . "<br/>";
