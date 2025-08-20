<?php 

    // Use of include
    // include("./hello.php");  // Give warning agar error ho to

    for($i = 0; $i<5; $i++){
        // include("./hello.php");
        //File use once 
        // include_once("./hello.php"); 
    }

    // require and require_once // Give Error agar error ho to
    // require("./hello.php"); 
    require_once("./hello.php"); 

?>