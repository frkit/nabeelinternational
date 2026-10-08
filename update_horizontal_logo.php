<?php
// 1. Copy the generated logo
$source_logo = 'C:\Users\Administrator\.gemini\antigravity-ide\brain\f0d169a5-48bc-4cbf-89a4-2cec249942fb\horizontal_corporate_logo_1791371532888.jpg';
$dest_logo = 'f:\wamp64\www\nabeel\images\mature_logo_horizontal.jpg';
copy($source_logo, $dest_logo);

// 2. Update header.php to use the new logo
$header_path = 'f:\wamp64\www\nabeel\layout\header.php';
$header = file_get_contents($header_path);

// Replace any existing logo.jpg or images/mature_logo.jpg with images/mature_logo_horizontal.jpg
$header = preg_replace('/<img src="[^"]*logo\.jpg"/', '<img src="images/mature_logo_horizontal.jpg"', $header);
file_put_contents($header_path, $header);

// 3. Update style.css to use 0 margin and 0 padding
$css_path = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_path);

// Replace the existing .logo img rule with 0 margin, 0 padding
$css = preg_replace('/\.logo\s+img\s*\{[^}]+\}/', '.logo img { height: 100px; max-width: 350px; object-fit: contain; margin: 0; padding: 0; }', $css);

// Optional: Adjust the .logo a container to also have no margin/padding
if(strpos($css, '.logo a {') === false) {
    $css .= "\n.logo a { display: block; margin: 0; padding: 0; line-height: 0; }\n";
}

file_put_contents($css_path, $css);
echo "Horizontal logo applied with 0 margin and 0 padding!";
?>
