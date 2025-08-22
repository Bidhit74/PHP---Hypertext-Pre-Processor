<?php
class Student {
    const COLLEGE = "LNMU Darbhanga"; // Class constant

    public function showCollege() {
        echo "College Name: " . self::COLLEGE; // Access with self
    }
}

// Access directly with class name
echo Student::COLLEGE . "<br>"; // LNMU Darbhanga

// Access through object
$obj = new Student();
$obj->showCollege(); // College Name: LNMU Darbhanga
?>