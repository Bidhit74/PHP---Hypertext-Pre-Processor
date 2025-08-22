<?php
class Counter {
    public static $count = 0;  // static variable

    public function increase() {
        self::$count++;  // access static variable with self::
    }
}

// Static Method Example
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }
}

$obj1 = new Counter();
$obj1->increase();

$obj2 = new Counter();
$obj2->increase();

echo Counter::$count;  // Output: 2 (shared by all objects)
echo "<hr>";
// Without creating object
echo Math::add(5, 10);  // Output: 15
?>