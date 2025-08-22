<!-- Encapsulation (Data Hiding) -->
<!-- Class ke andar properties aur methods ko bind karna. Direct access rokna aur getter-setter method use karna. -->

<?php
echo "<h1> Encapsulation (Data Hiding) </h1>";
class Student {
    private $name; // private -> direct access nahi hoga

    // Setter Method
    public function setName($name) {
        $this->name = $name;
    }

    // Getter Method
    public function getName() {
        return $this->name;
    }
}

$stu = new Student();
$stu->setName("Bidhit");

echo $stu->getName(); // Output: Bidhit
?>