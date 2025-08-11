<!DOCTYPE html>
<html>

<head>
    <title>PHP with HTML</title>
</head>

<body>
    <h1>Welcome!</h1>
    <?php
        $name = "Bidhit";
        $_yellow = "green";
        echo "<p style='color:blue'>Hello, $name. This is PHP inside HTML.</p>";
    ?>
    <p>This is a static HTML paragraph.</p>
    <h1 style='color:<?php echo $_yellow ?>'>Hello Bidhit</h1>
</body>

</html>