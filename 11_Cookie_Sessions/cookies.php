<?php
    // Cookie set karna (expire time = 1 hour from now)
    // setcookie(name, value, expire, path, domain, secure, httponly);
    setcookie("username", "Bidhit", time() + 3600, "/");  
    echo "Cookie set ho gayi!<br>";
    
    // Cookie delete karna (expire time ko past me set karte hain)
    setcookie("username", "", time() - 3600, "/"); 

    // Cookie check aur print karna
    if(isset($_COOKIE["username"])) {

        echo "Welcome, " . $_COOKIE["username"];  // Agar cookie set hai to print karega
    } else {
        echo "Cookie deleted successfully!";
    }
?>