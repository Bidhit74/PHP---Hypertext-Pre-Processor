<?php
class Student {
    public $name;

    // Constructor
    public function __construct($n) {
        $this->name = $n;
        echo "Object Created for " . $this->name . "<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Object Destroyed for " . $this->name . "<br>";
    }
}

// Object create
$s1 = new Student("Bidhit");
$s2 = new Student("Navnit");
?>