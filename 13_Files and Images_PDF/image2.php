<!-- Load Existing Image -->
<?php
//     $imagePath = __DIR__ . "/sample.jpg"; // safer path

//     if (!file_exists($imagePath)) {
//         die("Image not found!");
//     }

//     $image = imagecreatefromjpeg($imagePath);

//     header("Content-Type: image/jpeg"); // no echo before this
//     imagejpeg($image);

//     imagedestroy($image);

//Convert Image Type (JPG → PNG)

// Load JPG
$image = imagecreatefromjpeg(__DIR__ . "/sample.jpg");

// Save as PNG
imagepng($image, "converted.png");

echo "Image converted successfully!";
imagedestroy($image);


?>