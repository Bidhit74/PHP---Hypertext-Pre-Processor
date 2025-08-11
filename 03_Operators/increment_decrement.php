<?php
$x = 5;

echo "Pre-Increment (++\$x): " . (++$x) . "<br>"; // 6 (increase first)
$x = 5;
echo "Post-Increment (\$x++): " . ($x++) . "<br>"; // 5 (use first)
echo "After Post-Increment: " . $x . "<br>";       // 6

$x = 5;
echo "Pre-Decrement (--\$x): " . (--$x) . "<br>"; // 4 (decrease first)
$x = 5;
echo "Post-Decrement (\$x--): " . ($x--) . "<br>"; // 5 (use first)
echo "After Post-Decrement: " . $x . "<br>";       // 4
?>