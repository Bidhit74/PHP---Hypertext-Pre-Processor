<?php 

// GET → Data visible in URL.
    echo "<h1>This is PHP File,</h1>";
    if($_GET){
        echo "Your Name is: " . $_GET['username'];
        echo "</br>";
        echo "Your Password is: ". $_GET['password'];
    }

// POST → Data hidden, more secure.
    if($_POST){
    echo "Your Name is: " . $_POST['username'];
    echo "</br>";
    echo "Your Password is: ". $_POST['password'];
    }
?>