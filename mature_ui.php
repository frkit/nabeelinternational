<?php
// 1. Update layout/style.css for a Mature Corporate UI
$css_path = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_path);

// Update root variables to mature colors (Navy Blue & Gold/Bronze)
$css = preg_replace('/--primary-color:\s*#[a-zA-Z0-9]+;/', '--primary-color: #0f294d;', $css); // Deep corporate navy (like booking.com / luxury airlines)
$css = preg_replace('/--secondary-color:\s*#[a-zA-Z0-9]+;/', '--secondary-color: #d4af37;', $css); // Luxury gold
$css = preg_replace('/--accent-color:\s*#[a-zA-Z0-9]+;/', '--accent-color: #f8fafc;', $css); // Clean slate gray
$css = preg_replace('/background-color:\s*#FFF4F4;/', 'background-color: #fcfcfc;', $css); // Professional off-white background

// Reduce bouncy hover effects and large border radii for a more mature, sleek look
$css = str_replace('border-radius: 8px', 'border-radius: 8px', $css);
$css = str_replace('border-radius: 12px', 'border-radius: 12px', $css);
$css = str_replace('border-radius: 12px', 'border-radius: 12px', $css);
$css = str_replace('border-radius: 8px', 'border-radius: 8px', $css);
$css = str_replace('transform: translateY(-5px)', 'transform: translateY(-5px)', $css);
$css = str_replace('transform: translateY(-4px)', 'transform: translateY(-4px)', $css);

// Tone down the overly loud gradients in CSS
$css = str_replace('linear-gradient(135deg, var(--primary-color), var(--secondary-color))', 'linear-gradient(135deg, #0f294d, #1e3a8a)', $css);
$css = str_replace('linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%)', 'linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%)', $css);

file_put_contents($css_path, $css);
echo "layout/style.css updated to mature UI.\n";

// 2. We need to tone down individual page styles
$files = glob('f:\wamp64\www\nabeel\*.php');
foreach ($files as $file) {
    if (strpos($file, 'setup_') !== false || strpos($file, 'update_') !== false || strpos($file, 'add_') !== false || strpos($file, 'optimize_') !== false || strpos($file, 'force_') !== false) {
        continue;
    }
    
    $content = file_get_contents($file);
    $original = $content;
    
    // Tone down bright red/orange/pink gradients to elegant corporate tones
    $content = str_replace('rgba(15, 41, 77, 0.9)', 'rgba(15, 41, 77, 0.9)', $content); // Red -> Navy
    $content = str_replace('rgba(30, 58, 138, 0.9)', 'rgba(30, 58, 138, 0.9)', $content); // Orange -> Dark Blue
    $content = str_replace('rgba(15, 41, 77, 0.9)', 'rgba(15, 41, 77, 0.9)', $content);
    $content = str_replace('rgba(30, 58, 138, 0.9)', 'rgba(30, 58, 138, 0.9)', $content);
    $content = str_replace('linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%)', 'linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%)', $content);
    $content = str_replace('linear-gradient(135deg, #0f294d 0%, #0b1d36 100%)', 'linear-gradient(135deg, #0f294d 0%, #0b1d36 100%)', $content);
    $content = str_replace('linear-gradient(135deg, #0f294d 0%, #1e3a8a 100%)', 'linear-gradient(135deg, #0f294d 0%, #1e3a8a 100%)', $content);
    
    // Change bright red/pink solid colors to Navy or Gold
    $content = preg_replace('/background:\s*#ef4444;/', 'background: #d4af37;', $content); // Red -> Gold
    $content = preg_replace('/color:\s*#ef4444;/', 'color: #d4af37;', $content);
    $content = preg_replace('/color:\s*#d32f2f;/', 'color: #d4af37;', $content);
    $content = preg_replace('/background-color:\s*#fca5a5;/', 'background-color: #e2e8f0;', $content);
    
    // Fix border radii in inline styles
    $content = str_replace('border-radius: 8px', 'border-radius: 8px', $content);
    $content = str_replace('border-radius: 12px', 'border-radius: 12px', $content);
    $content = str_replace('border-radius: 12px', 'border-radius: 12px', $content);
    $content = str_replace('border-radius: 8px', 'border-radius: 8px', $content);
    $content = str_replace('border-radius: 8px', 'border-radius: 8px', $content);
    
    // Fix bouncy translates
    $content = str_replace('transform: translateY(-5px)', 'transform: translateY(-5px)', $content);
    $content = str_replace('transform: translateY(-4px)', 'transform: translateY(-4px)', $content);
    
    // Mute very loud box shadows
    $content = str_replace('rgba(0,0,0,0.1)', 'rgba(0,0,0,0.1)', $content);
    $content = str_replace('rgba(0,0,0,0.1)', 'rgba(0,0,0,0.1)', $content);
    $content = str_replace('rgba(0,0,0,0.1)', 'rgba(0,0,0,0.1)', $content);
    $content = str_replace('rgba(0,0,0,0.1)', 'rgba(0,0,0,0.1)', $content);
    
    if ($content !== $original) {
        file_put_contents($file, $content);
        echo "Updated $file to mature UI.\n";
    }
}

echo "Global Mature UI overhaul complete!";
?>
