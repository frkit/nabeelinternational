<?php
// 1. Optimize header.php
$header_path = 'f:\wamp64\www\nabeel\layout\header.php';
$header = file_get_contents($header_path);

// Add Output Buffering / Gzip compression at the very top if not exists
if (strpos($header, 'ob_start') === false) {
    $gzip_code = "<?php if(!ob_start(\"ob_gzhandler\")) ob_start(); ?>\n<!DOCTYPE html>";
    $header = str_replace('<!DOCTYPE html>', $gzip_code, $header);
}

// Add preconnects for faster DNS resolution and connection
if (strpos($header, 'preconnect') === false) {
    $preconnects = <<<HTML
    <!-- Performance Optimizations -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
HTML;
    $header = str_replace('<!-- Google Fonts -->', $preconnects . "\n    <!-- Google Fonts -->", $header);
}

file_put_contents($header_path, $header);
echo "header.php optimized! ";

// 2. Add loading="lazy" to images in all PHP files (except if already added)
$files = glob('f:\wamp64\www\nabeel\*.php');
$count = 0;
foreach ($files as $file) {
    // Skip scripts we wrote
    if (strpos($file, 'setup_') !== false || strpos($file, 'add_') !== false || strpos($file, 'force_') !== false || strpos($file, 'update_') !== false) {
        continue;
    }
    
    $content = file_get_contents($file);
    $original = $content;
    
    // Replace <img src=... with <img loading="lazy" src=...
    // Careful not to replace those that already have loading="lazy"
    $content = preg_replace('/<img(?![^>]*loading=["\']lazy["\'])\s/i', '<img loading="lazy" ', $content);
    
    // Replace iframe with loading="lazy"
    $content = preg_replace('/<iframe(?![^>]*loading=["\']lazy["\'])\s/i', '<iframe loading="lazy" ', $content);
    
    if ($content !== $original) {
        file_put_contents($file, $content);
        $count++;
    }
}
echo "$count PHP files updated with lazy loading for images and iframes.";
?>
