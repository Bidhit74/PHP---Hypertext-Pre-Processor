<?php
// Class (Blueprint)
class Car {
    public $brand;
    public $color;

    // Constructor
    function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    function showCar() {
        return "Car: $this->brand, Color: $this->color";
    }
}

// Object (Instance)
$car1 = new Car("BMW", "Black");
echo $car1->showCar();
?>