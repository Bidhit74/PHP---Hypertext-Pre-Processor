<?php 
echo "<center>";
// 1. String
$name = "Bidhit";
echo "String: My name is $name<br>";
echo var_dump($name) . "<br>";

// 2. Integer
$age = 21;
echo "Integer: My age is $age<br>";

// 3. Float / Double
$price = 99.99;
echo "Float: The price is $price<br>";
echo var_dump($price) . "<br>";

// 4. Boolean
$is_active = true;
echo "Boolean: Is active? " . ($is_active ? "Yes" : "No") . "<br>";

// 5. Array
// $colors = array("Red", "Green", "Blue");
$colors = ["Red", "Green", "Blue"];
echo "Array: My favorite colors are {$colors[0]}, {$colors[1]}, and {$colors[2]}<br>";
echo var_dump($colors) . "<br>";
// 6. Object
class Car {
    public $model = "BMW";
    public function getModel() {
        return $this->model;
    }
}
$myCar = new Car();
echo "Object: My car model is " . $myCar->getModel() . "<br>";
echo var_dump($myCar) . "<br>";

// 7. NULL
$data = NULL;
echo "NULL: The value is " . var_export($data, true) . "<br>";
echo var_dump($data) . "<br>";

echo "</center>";

?>