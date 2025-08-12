<!-- Loops in PHP – Used to execute a block of code repeatedly until a condition is met. -->

<?php
    // 1. for loop –- Used when you know the number of iterations.
    for($x = 1; $x <= 5; $x++) {
        echo "Number: $x<br>";
    }
    echo "<br>"; // Adding a line break for better readability

    // 2. while loop –- Runs while condition is true.
    $x = 1;
    while($x <= 5) {
        echo "Number: $x<br>";
        $x++;
    }
    echo "<br>";

    // 3. do...while loop – Runs at least once, then repeats while condition is true.
    $x = 1;
    do {
        echo "Number: $x<br>";
        $x++;
    } while($x <= 5);
    echo "<br>";

    // 4. foreach loop –- Used to iterate over arrays.
    $colors = array("Red", "Green", "Blue");    
    foreach($colors as $color) {
        echo "$color<br>";
    }
?>