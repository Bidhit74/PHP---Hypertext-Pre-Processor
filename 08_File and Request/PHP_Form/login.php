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

// $_REQUEST['name'] → Fetches from both GET & POST (and cookies).
    echo "</br>";
    echo "Always: Your Name is: " . $_REQUEST['username'];

// 4. $_SERVER Example
    echo "<hr>";
    echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
    echo "<hr>";

// 5. $_SESSION Example
    echo "<hr>";
    session_start();
    $_SESSION["user"] = "Bidhit";
    echo "Session User: " . $_SESSION["user"] . "<br>";
    echo "<hr>";
    
// 6. $_COOKIE Example
    echo "<hr>";
    setcookie("lang", "PHP", time()+3600, "/");
    if(isset($_COOKIE["lang"])) {
        echo "Cookie Value: " . $_COOKIE["lang"] . "<br>";
    }
    echo "<hr>";

    // 7. $_FILES Example
    // When uploading a file
    // echo $_FILES['file']['name'];

    // 8. $_ENV Example
    // echo $_ENV['PATH'];

// 9. $GLOBALS Example
    $x = 10; $y = 20;
    function sum() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    sum();
    echo "Sum is: " . $z;  // 30

?>