<?php
    // 1. Functions with Parameters (By Value)
    // Default way: The function gets a copy of the argument.
    function addFive($num) {
        $num += 5;
        echo "Inside: $num<br>";
        echo "<hr>";
    }
    $val = 10;
    addFive($val);
    echo "Outside: $val"; // Outside: 10
    echo "<hr>";

    // 2. Functions with Parameters (By Reference)
    // Use & to pass a variable by reference.
    // Changes inside function affect the original variable.
    function addFiveRef(&$num) {
        $num += 5;
    }
    $val = 10;
    addFiveRef($val);
    echo "<hr>";
    echo $val; // Output: 15
    echo "<hr>";

    // 3. Functions with Default Parameters
    // Provide a default value if no argument is passed.
    function greet($name = "Guest") {
        echo "Hello, $name!";
    }
    greet();         // Hello, Guest!
    echo "<hr>";
    greet("Bidhit"); // Hello, Bidhit!
    echo "<hr>";

    // 4. Functions with Return Values
    // Send data back to the caller.
    function sum($a, $b) {
        return $a + $b;
    }
    echo sum(5, 7); // Output: 12
?>