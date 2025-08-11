<?php
$a = true;
$b = false;

echo "<br> AND (and): "; var_dump($a and $b); // false
echo "<br> AND (&&): "; var_dump($a && $b);   // false
echo "<br> OR (or): "; var_dump($a or $b);    // true
echo "<br> OR (||): "; var_dump($a || $b);    // true
echo "<br> XOR (xor): "; var_dump($a xor $b); // true
echo "<br> NOT (!): "; var_dump(!$a);         // false
echo "<br> NOT (!): "; var_dump(!$b);         // true
?>