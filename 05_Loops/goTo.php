<!-- Goto Statement in PHP

1. The goto statement is used to jump to another section of the program.

2. It uses a label as a reference point to jump.

3. Avoid overuse because it can make code confusing. -->

<!-- Syntax:

goto label_name;

label_name:
    // code to execute -->

<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        goto skip;
    }
    echo "Number: $i <br>";
}

skip:
echo "Jumped to label!";
?>