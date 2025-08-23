<!-- PHP me image handling ke liye GD Library ka use hota hai. Isme hum images create, resize, crop, watermark, convert kar sakte hain. -->

<!-- 1. Create New Blank Image -->
<?php
    // Create a blank image (width=200, height=100)
    $image = imagecreatetruecolor(200, 100);

    // Allocate colors (RGB)
    $white = imagecolorallocate($image, 255, 155, 255);
    $red   = imagecolorallocate($image, 255, 0, 0);

    // Fill background with white
    imagefill($image, 0, 0, $white);

    // Draw a red rectangle
    imagerectangle($image, 50, 25, 150, 75, $red);

    // Output as PNG
    header("Content-Type: image/png");
    imagepng($image);

    // Free memory
    imagedestroy($image);
?>