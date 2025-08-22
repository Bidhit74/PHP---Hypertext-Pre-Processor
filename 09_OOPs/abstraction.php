<!-- Abstraction (Hiding Details)
Sirf essential features show karna, implementation details hide karna. -->

<?php
    abstract class Animal {
        abstract public function sound(); // abstract method (only declare, no body)
    }

    class Dog extends Animal {
        public function sound() {
            return "Bark";
        }
    }

    class Cat extends Animal {
        public function sound() {
            return "Meow";
        }
}

$dog = new Dog();
$cat = new Cat();
echo $dog->sound(); // Output: Bark
echo "</br>";
echo $cat->sound(); // Output: Meow
?>