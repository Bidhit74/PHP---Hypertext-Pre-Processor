<?php
    // Single-quoted string
    $str1 = 'Hello World';

    // Double-quoted string (variables work inside it)
    $name = "Bidhit";
    $str2 = "Hello, my name is $name";

    // Concatenation using dot (.)
    $str3 = "Hello " . "PHP";

    echo $str1 . "<br>";
    echo $str2 . "<br>";
    echo $str3;
?>