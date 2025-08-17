<?php 
    $name = "Bidhit Chaudhary";
    // Using strlen() function to get the length of the string
    echo strlen($name) . "<br>";

    // Using str_word_count() function to count the number of words in the string
    echo str_word_count($name) . "<br>";

    // using var_dump() to display the variable type and value
    echo var_dump($name) . "<br>";

    // using date() function to get the current date
    echo date('l')."<br>"; // 'l' returns the full textual representation of the day of the week
    echo date('Y-m-d H:i:s')."<br>"; // 'Y-m-d H:i:s' returns the current date and time in a specific format

    // echo phpinfo()."<br>"; // Display PHP configuration information

    // Using is_string() to check if the variable is a string
    echo is_string($name) ? "Yes, it is a string." ."<br>" : "No, it is not a string." . "<br>";

    // Using is_numeric() to check if the variable is numeric
    $number = 12345;
    echo is_numeric($number) ? "Yes, it is numeric."."<br>" : "No, it is not numeric." . "<br>";

    // using rand() to generate a random number
    echo rand(1,100) . "<br>"; // Generates a random number between 1 and 100

    // using die() and exit() functions
    // die("Exiting the script."); // This will terminate the script and output the message 
    // exit("Exiting the script."); // This will also terminate the script and output the message

    echo "Start Script <br>";
    // die();
    // exit();
    echo("End Script <br>"); 
?>