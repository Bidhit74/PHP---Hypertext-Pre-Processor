<?php
    // Session start karna (har page pe zaroori)
    session_start();

    // Session variable set karna
    $_SESSION['username'] = "Bidhit";
    $_SESSION['email'] = "bidhit@example.com";

    echo "Session variables set ho gayi hain.<br>";
    
    // Session variable access karna
    if($_SESSION['username']){
        echo "Welcome, " . $_SESSION['username'] . "<br>";
        echo "Your email is: " . $_SESSION['email'];
    }
     // Destroy the session
    session_destroy();
    echo "<hr> Session destroyed! ";

?>
?>