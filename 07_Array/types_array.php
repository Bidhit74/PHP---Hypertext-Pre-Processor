<!-- ✅ Types of Arrays in PHP -->

<?php
    // 1. Indexed Array (Numeric keys – default)
    // Stores values with index numbers (0,1,2,…)

    $fruits = array("Apple", "Banana", "Mango", "Orange");
    echo $fruits[0]. "\n"; // Output: Apple
    echo $fruits[2]; // Output: Mango
    echo "</br>";

    foreach($fruits as $fruit){
        echo "<h3 style='color:blue'>". $fruit. "</h3>";
    }

    // another way use foreach loop
    foreach($fruits as $index => $fruit){
        echo "<h3 style='color:green'>". $index. " - ". $fruit. "</h3>";
    }

    // another way use foreach loop
    foreach($fruits as $fruit):
        echo "<h3 style='color:red'>". $fruit. "</h3>";
    endforeach; // End of foreach loop 

    echo "</br>";
    // 2. Associative Array (Named keys)
    // Stores values with custom keys.

    $age = array("Aman"=>20, "Riya"=>22, "Rahul"=>19);
    echo $age["Aman"]. "\n"; // Output: 20
    echo $age["Riya"]; // Output: 22
    echo "</br>";
    foreach($age as $name => $value){
        echo "<h3 style='color:purple'>". $name. " is ". $value. " years old</h3>";
    }

    // 3. Multidimensional Array (Array inside array)
    // Used to store tabular/complex data.

    $students = array(
        array("Aman", 20, "BCA"),
        array("Riya", 22, "BBA"),
        array("Rahul", 19, "B.Sc")
    );

    echo $students[0][0]. "\n"; // Output: Aman
    echo $students[1][2]; // Output: BBA

?>