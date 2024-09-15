<?php


abstract class Shape {
    
    abstract public function area();
}


class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}


class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the area method for Rectangle
    public function area() {
        return $this->width * $this->height;
    }
}


$circle = new Circle(5);  
echo "Circle Area: " . $circle->area() . "\n";

$rectangle = new Rectangle(4, 6);  
echo "Rectangle Area: " . $rectangle->area() . "\n";

?>