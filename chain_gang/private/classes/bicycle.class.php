<?php
class Bicycle
{
    //class constants
    public const CATEGORIES = [
        'Hybrid', 'Road', 'City', 'Mountain', 'Cruiser', 'BMX'
    ];
    public const GENDER = ['men', 'women', 'unisex'];
    public const CONDITION = [
        1 => 'Beat up', 2 => 'Decent', 3 => 'Good',
        4 => 'Great', 5 => 'Like New'
    ];

    // class properties
    public  $brand;
    public  $model;
    public  $year;
    public  $category;
    public  $color;
    public  $description;
    public  $gender;
    public  $price;
    public  $condition_id;
    private $weight_kg = 0.0;
    // construct magic method to initialize properties
    // at object creation
    public function __construct($args = [])
    {
        $this->brand        = $args['brand']        ?? NULL;
        $this->model        = $args['model']        ?? NULL;
        $this->year         = $args['year']         ?? NULL;
        $this->category     = $args['category']     ?? NULL;
        $this->color        = $args['color']        ?? NULL;
        $this->descripion   = $args['description']  ?? NULL;
        $this->gender       = $args['gender']       ?? NULL;
        $this->price        = $args['price']        ?? NULL;
        $this->condition_id = $args['condition_id'] ?? NULL;
    }

    public function set_wieight_kg($weight)
    {
        $this->weight_kg = $weight;
    }

    public function weight_kg()
    {
        return "{$this->weight_kg} kg's";
    }

    public function set_weight_lbs($weight)
    {
        $this->weight_kg = $weight / 2.204;
    }

    public function weight_lbs()
    {
        $weight_lbs = $this->weight_kg * 2.204;
        return "{$weight_lbs} lbs";
    }

    public function condition()
    {
        $condition_id = $this->condition_id;
        return self::CONDITION[$condition_id];
    }

    
}
