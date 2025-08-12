<!-- Variable Functions in PHP

1. In PHP, variable functions allow you to call a function using a variable that contains the function's name.

2. If a variable contains the name of a function, you can call it by appending parentheses () to that variable. -->

<?php
function greet() {
    echo "Hello, Welcome Bidhit !";
}

$func = "greet";  // Store function name in variable
$func();          // Call function using variable
?>

<!-- Uses:

Calling functions dynamically based on conditions.

Useful in callbacks and plugin-based systems. -->