<?php
// 1. Update header.php to use text instead of an image
$header_path = 'f:\wamp64\www\nabeel\layout\header.php';
$header = file_get_contents($header_path);

// Replace the image tag with text
$header = preg_replace(
    '/<a href="index\.php">\s*<img src="[^"]*" alt="Nabeel International">\s*<\/a>/', 
    '<a href="index.php" class="logo-text">Nabeel <span style="color: #d4af37;">International</span></a>', 
    $header
);
// Also catch if it was without wrapper or slightly different
$header = preg_replace(
    '/<div class="logo">\s*<img src="[^"]*" alt="Nabeel International">\s*<\/div>/', 
    '<div class="logo"><a href="index.php" class="logo-text">Nabeel <span style="color: #d4af37;">International</span></a></div>', 
    $header
);

file_put_contents($header_path, $header);

// 2. Add styles for the text logo in style.css
$css_path = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_path);

$text_logo_css = <<<CSS

/* Text Logo Styles */
.logo-text {
    font-family: var(--font-heading);
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary-color);
    text-decoration: none;
    letter-spacing: 1px;
    margin: 0;
    padding: 0;
    display: inline-block;
    line-height: 1;
}

@media (max-width: 768px) {
    .logo-text {
        font-size: 1.5rem;
    }
}
CSS;

if (strpos($css, '.logo-text') === false) {
    file_put_contents($css_path, $css . "\n" . $text_logo_css);
}

echo "Logo image replaced with styled text!";
?>
