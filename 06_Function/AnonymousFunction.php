<!-- Anonymous Function in PHP

An anonymous function (also called a closure) is a function without a name.

It is often stored in a variable or passed as an argument to another function.

Introduced in PHP 5.3. -->

<?php
$greet = function($name) {
    echo "Hello, $name!";
};

$greet("Bidhit");  // Calling anonymous function
?>

<!-- Uses:

one-time use functions.

Passing as arguments to other functions (callbacks).

Useful in array operations like array_map, array_filter. -->