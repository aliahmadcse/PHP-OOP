<?php
class Box
{
    public $name = "box";
}

$box = new Box;

$box_reference = $box;

$box_clone = clone $box;
$box_modified = clone $box;
$box_modified->name = "Changed box";

$another_box=new Box;
