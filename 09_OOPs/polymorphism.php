<!-- Polymorphism (Many Forms)
Ek method alag-alag tarike se behave kare. -->

<?php
    class Shape {
        public function draw() {
            return "Drawing a shape";
        }
    }

    class Circle extends Shape {
        public function draw() {
            return "Drawing a circle";
        }
    }

    class Square extends Shape {
        public function draw() {
            return "Drawing a square";
        }
    }

$shapes = [new Shape(), new Circle(), new Square()];

foreach ($shapes as $shape) {
    echo $shape->draw() . "<br>";
}
?>