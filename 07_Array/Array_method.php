<?php 
// 🔹 1. count() – Get number of elements
    $fruits = ["Apple", "Banana", "Mango"];
    echo count($fruits); // Output: 3
    echo "<br>";

// 🔹 2. array_push() – Add element(s) at end
    array_push($fruits, "Khira", "Orange");
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Mango [3] => Khira [4] => Orange )
    echo "<br>";

// 🔹 3. array_pop() – Remove last element
    array_pop($fruits);
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Mango [3] => Khira )
    echo "<br>";

// 🔹 4. array_shift() – Remove first element
    array_shift($fruits);
    print_r($fruits); // Output: Array ( [0] => Banana [1] => Mango [2] => Khira )
    echo "<br>";

// 🔹 5. array_unshift() – Add element(s) at beginning
    array_unshift($fruits, "Apple", "Orange");
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Orange [2] => Banana [3] => Mango [4] => Khira )
    echo "<br>";

// 🔹 6. array_slice() – Extract a slice of the array
    $slice = array_slice($fruits, 1, 4);
    print_r($slice); // Output: Array ( [0] => Orange [1] => Banana [2] => Mango [3] => Khira )
    echo "<br>";

// 🔹 7. array_splice() – Remove and replace elements
    array_splice($fruits, 1, 2, ["Grapes", "Pineapple"]);
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Grapes [2] => Pineapple [3] => Mango [4] => Khira )
    echo "<br>";

// 🔹 8. array_merge() – Merge two or more arrays
    $vegetables = ["Carrot", "Potato"];
    $merged = array_merge($fruits, $vegetables);
    print_r($merged); // Output: Array ( [0] => Apple [1] => Grapes [2] => Pineapple [3] => Mango [4] => Khira [5] => Carrot [6] => Potato )
    echo "<br>";

// 🔹 9. in_array() – Check if value exists
    echo in_array("Apple", $fruits); // Output: 1 (true).
    echo "<br>";

// 🔹 10. array_keys() – Get keys of an array
    $associativeArray = ["name" => "John", "age" => 30, "city" => "New York"];
    $keys = array_keys($associativeArray);
    print_r($keys); // Output: Array ( [0] => name [1] => age [2] => city )
    echo "<br>";

// 🔹 11. array_values() – Get values of an array
    $values = array_values($associativeArray);
    print_r($values); // Output: Array ( [0] => John [1] => 30 [2] => New York )
    echo "<br>";

// 🔹 12. array_flip() – Swap keys and values
    $flipped = array_flip($associativeArray);
    print_r($flipped); // Output: Array ( [John] => name [30] => age [New York] => city )
    echo "<br>";
    
// 🔹 13. sort() / rsort() – Sort values
    $fruits = ["Banana", "Apple", "Mango"];
    sort($fruits);
    print_r($fruits); // [Apple, Banana, Mango]
    echo "<br>";

    rsort($fruits);
    print_r($fruits); // [Mango, Banana, Apple]
?>