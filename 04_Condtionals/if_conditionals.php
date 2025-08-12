<?php
// 1. if Statement
    $age = 18;
    if ($age >= 18) {
        echo "You are an adult.";
    }
    echo "<br>";

// 2. if-else Statement
    $age = 16;
    if ($age >= 18) {
        echo "You are an adult.";
    } else {
        echo "You are a minor.";
    }
    echo "<br>";

// 3. if-elseif-else Statement
    $marks = 75;
    if ($marks >= 90) {
        echo "Grade A";
    } elseif ($marks >= 75) {
        echo "Grade B";
    } else {
        echo "Grade C";
    }
?>