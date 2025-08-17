<?php 

    $students = [
        [1, "Bidhit", 23, "bkc@60716.com"],
        [2, "Sujan", 22, "kcbjd@gam.com"],
        [3, "Sanjay", 24, "bkc@60716.com"],
        [4, "Sanjana", 21, "bkc@60716.com"]
    ];

    echo "<h2>Student Information</h2>";
    echo "<table border=1>";
    for( $i = 0; $i < count($students); $i++) {
        echo "<tr>";
        for($j = 0; $j < count($students[$i]); $j++) {
            echo "<td>" . $students[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>