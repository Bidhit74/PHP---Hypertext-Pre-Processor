<?php 
// 2D Array Example
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Jane", "age" => 22, "grade" => "B"),
    array("name" => "Doe", "age" => 21, "grade" => "C")
);

// Displaying the 2D array
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key --> $value<br>";
    }
}

// Data Table Example
echo "<h2>Student Information</h2>";
    echo "<table border=3>";
    foreach ($students as $student) {
        echo "<tr>";
        foreach ($student as $key => $value) {
            echo "<td>";
            echo $key . ": ". $value;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>