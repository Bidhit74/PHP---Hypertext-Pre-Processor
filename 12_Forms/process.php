<?php
    // POST method se data receive karna
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Data sanitize karna
        //htmlspecialchars() se XSS attack prevent hota hai.
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $gender = isset($_POST['gender']) ? $_POST['gender'] : "Not Selected";
        $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
        $country = $_POST['country'];

        // Display data
        echo "<h2>Form Data Received:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Hobbies: " . (!empty($hobbies) ? implode(", ", $hobbies) : "None") . "<br>";
        echo "Country: " . $country . "<br>";
    }

?>