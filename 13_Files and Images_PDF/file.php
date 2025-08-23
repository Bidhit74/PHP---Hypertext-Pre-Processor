<?php
    // 1. File Open (write mode: 'w' => overwrite karega)
    // $file = fopen("example.txt", "w"); 
    // echo "File Created <hr>";

    // 2. File Write
    // fwrite($file, "Hello, this is first line.\n");
    // fwrite($file, "PHP File Handling Example.\n");
    // echo "File Write inside the file <hr>";

    // 3. File Close
    // fclose($file);

    // 4. File Open (read mode: 'r')
    // $file = fopen("example.txt", "r") or die("unable to read file");

    // 5. File Read (filesize() se pura content read hoga)
    // $content = fread($file, filesize("example.txt"));

    // Output file content
    // echo nl2br($content);  // nl2br() new line ko <br> me convert karega

    // 6. Close File
    // fclose($file);

    // Open file in append mode ('a')
    $file = fopen("example.txt", "a");

    // Add new content at the end of file
    fwrite($file, "This line is appended.\n");

    // Close file
    fclose($file);

    echo "Data appended successfully!";
?>