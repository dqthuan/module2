<?php
include_once('Circle.php');

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + pasrent::calculatePerimeter;
    }
    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}