<?php
$css_path = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_path);

// Make the logo significantly larger
$css = preg_replace('/\.logo\s+img\s*\{[^}]+\}/', '.logo img { height: 110px; object-fit: contain; padding: 5px 0; margin-top: 5px; }', $css);

// Ensure navbar accommodates the larger logo gracefully
$css = preg_replace('/\.navbar\s*\{[^}]+\}/', '.navbar { display: flex; justify-content: space-between; align-items: center; padding: 0 5%; background-color: #fff; box-shadow: 0 5px 20px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 1000; min-height: 120px; }', $css);

file_put_contents($css_path, $css);
echo "Logo size increased to fit menu area properly!";
?>
