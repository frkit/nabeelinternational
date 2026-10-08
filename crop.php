<?php
$im = imagecreatefromjpeg('f:\wamp64\www\nabeel\logo.jpg');

// Try automatic crop first
$cropped = imagecropauto($im, IMG_CROP_WHITE);

// If it fails or doesn't crop much, we can do a manual bounding box crop
if ($cropped !== false) {
    imagejpeg($cropped, 'f:\wamp64\www\nabeel\logo.jpg', 100);
    imagedestroy($cropped);
    echo "Cropped automatically.\n";
} else {
    echo "Auto crop failed or no white space.\n";
}
imagedestroy($im);
?>
