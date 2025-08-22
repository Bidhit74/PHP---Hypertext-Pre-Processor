<?php
    // Cookie set karna (expire time = 1 hour from now)
    // setcookie(name, value, expire, path, domain, secure, httponly);
    setcookie("username", "Bidhit", time() + 3600, "/");  

    // Cookie check aur print karna
    if(isset($_COOKIE["username"])) {
        echo "Welcome, " . $_COOKIE["username"];  // Agar cookie set hai to print karega
    } else {
        echo "No cookie found!";  // Agar cookie abhi set nahi hai
    }
?>