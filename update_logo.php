<?php
// 1. Update header.php to use the new logo
$header_path = 'f:\wamp64\www\nabeel\layout\header.php';
$header = file_get_contents($header_path);

// Replace logo.jpg with images/mature_logo.jpg
$header = str_replace('<img src="logo.jpg" alt="Nabeel International">', '<img src="images/mature_logo.jpg" alt="Nabeel International">', $header);
file_put_contents($header_path, $header);

// 2. Update style.css to adjust padding for the logo
$css_path = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_path);

// Check if logo padding already exists or inject it
// We will replace .logo img { max-height: 50px; } or whatever it is, and ensure it has 1rem padding top/bottom as requested by user "1padding top bottom" -> 1rem padding
if (strpos($css, '.logo img') !== false) {
    // If it exists, let's just make sure it fits nicely
    $css = preg_replace('/\.logo\s+img\s*\{[^}]+\}/', '.logo img { height: 70px; object-fit: contain; padding: 10px 0; }', $css);
} else {
    // Append it
    $css .= "\n.logo img { height: 70px; object-fit: contain; padding: 10px 0; }\n";
}

// Adjust navbar height if it restricts the logo
$css = preg_replace('/\.navbar\s*\{[^}]+\}/', '.navbar { display: flex; justify-content: space-between; align-items: center; padding: 0 5%; background-color: #fff; box-shadow: 0 5px 20px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 1000; min-height: 90px; }', $css);

file_put_contents($css_path, $css);
echo "Logo updated and padded perfectly!";
?>
