<!-- Inheritance (Reusability)
Ek class dusri class ke properties & methods ko use kar sakti hai (extends keyword). -->

<?php
    class Person {
        public $name; // 🔹 Member variables (properties)
         // 🔹 Member Function (Method)
        public function greet() {
            return "Hello, my name is $this->name"; // $this->name is member variable
        }
    }

    class Student extends Person {
        public $course;
        // 🔹 Member Function (Method)
        public function showCourse() {
            return "I am studying $this->course";
        }
}

$stu = new Student();
$stu->name = "Bidhit";
$stu->course = "BCA";
echo $stu->greet();       // Output: Hello, my name is Bidhit
echo $stu->showCourse();  // Output: I am studying BCA
?>