<?php
    $name = "Bidhit";  // string variable
    $age = 21;         // integer variable
    echo "My name is $name and I am $age years old.<br>";

// Valid variables
    $name1 = "Bidhit";
    $_age = 21;
    $user1 = "PHP Learner";

// Invalid variables (will cause errors)
// $1user = "test";       // starts with number
// $first name = "abc";   // contains space
// $user-name = "xyz";    // contains hyphen

    echo $name1 . " is " . $_age . " years old. I am a $user1";

?>