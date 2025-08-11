<?php
$x = 10;
$y = "10";
$z = 5;

echo "Equal (==): "; var_dump($x == $y);  // true
echo "<br> Identical (===): "; var_dump($x === $y); // false (different type)
echo "<br> Not equal (!=): "; var_dump($x != $z); // true
echo "<br> Not equal (<>): "; var_dump($x <> $z); // true
echo "<br> Not identical (!==): "; var_dump($x !== $y); // true
echo "<br> Greater than: "; var_dump($x > $z); // true
echo "<br> Less than: "; var_dump($z < $x); // true
echo "<br> Greater or equal: "; var_dump($x >= 10); // true
echo "<br> Less or equal: "; var_dump($z <= 5); // true
echo "<br> Spaceship (<=>): "; var_dump($x <=> $z); // 1
?>