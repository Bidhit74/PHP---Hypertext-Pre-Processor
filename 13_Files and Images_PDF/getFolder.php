<!-- PHP me ek folder (directory) ke andar ki files list karne ke liye scandir() ya opendir() functions ka use hota hai. -->

<!-- Dono tarike sahi hain, lekin scandir() simple aur fast hai. -->

<!-- Example 1: Using scandir() -->

<?php
    $folder = "uploads"; // folder ka naam

    // Get all files and folders inside "uploads"
    // $files = scandir($folder);
    // print_r($files)

    // Loop through files
    // foreach ($files as $file) {
        // Ignore current (.) and parent (..)
    //     if ($file != "." && $file != "..") {
    //         echo $file . "<br>";
    //     }
    // }

    // Or
    // Files inside Remove (.) (..)
    // $files = array_diff($files, array(".",".."));
    // print_r($files);
    // foreach($files as $file) {
    //     // echo  "<hr>" . $file;
    //     // use <a> tag for file open
    //     echo  "<hr>";
    //     echo "<a href=./uploads/$file> $file </a>";
    // }

    // Example 2: Using opendir() and readdir()
    if (is_dir($folder)) {
    if ($dh = opendir($folder)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != "..") {
                echo $file . "<br>";
            }
        }
        closedir($dh);
    }
}
?>