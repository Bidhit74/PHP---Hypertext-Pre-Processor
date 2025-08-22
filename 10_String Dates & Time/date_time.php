<?php
    // Show current date (format: day-month-year)
    echo "Today is: " . date("d-m-Y") . "<br>"; 
    echo "Today is Day: " . date("d") . "<br>"; // Tarik - 22
    echo "Today is Day: " . date("l") . "<br>"; // Day name - Friday
    

    // Show current date (format: year/month/day)
    echo "Today is: " . date("Y/m/d") . "<br>";  

    // Show current time (hours:minutes:seconds)
    echo date_default_timezone_get();
    echo "Current Time is: " . date("h:i:sa") . "<br>";  

    // Set timezone (important for correct time)
    date_default_timezone_set("Asia/Kolkata");

    // Now display time with timezone
    echo "Time in India: " . date("h:i:sa");  
?>