<?php
$header_path = 'f:\wamp64\www\nabeel\layout\header.php';
$header = file_get_contents($header_path);

// Replace the logo-text to include the icon and styling
$new_logo = '<a href="index.php" class="logo-text"><i class="fas fa-plane-departure" style="color: #d4af37; margin-right: 8px;"></i><span style="color: #0f294d;">Nabeel</span> <span style="color: #d4af37;">International</span></a>';
$header = preg_replace('/<a href="index\.php" class="logo-text">Nabeel <span style="color: #d4af37;">International<\/span><\/a>/', $new_logo, $header);
file_put_contents($header_path, $header);

$css_path = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_path);

// Increase font-size for .logo-text
$css = preg_replace('/(\.logo-text\s*\{[^}]*font-size:\s*)2rem(;|})/', '${1}2.8rem$2', $css);
// Adjust mobile font-size
$css = preg_replace('/(\@media.*\.logo-text\s*\{[^}]*font-size:\s*)1\.5rem(;|})/', '${1}1.8rem$2', $css);

file_put_contents($css_path, $css);

echo "Logo text size increased and icon added!";
?>
