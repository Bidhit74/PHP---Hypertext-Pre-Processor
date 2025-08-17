<?php
    // Normal way (without array)
    $student1 = "Aman";
    $student2 = "Riya";
    $student3 = "Rahul";

    // Using array
    // $students = array("Aman", "Riya", "Rahul");
    $students = ["Aman", "Riya", "Rahul"]; // Short array syntax

    // Access array elements
    echo $students[0]. "\n"; // Output: Aman
    echo $students[1]. "\n"; // Output: Riya
    echo $students[2]. "\n"; // Output: Rahul

    // Multiple data types in an array
    $studentDetails = [
        "name" => "Aman",
        "age" => 20,
        "isStudent" => true,
    ];
    echo "</br>";
    echo $studentDetails["name"]. "\n"; // Output: Aman
    echo $studentDetails["age"]. "\n"; // Output: 20
?>