<?php
$header_path = 'f:\wamp64\www\nabeel\layout\header.php';
$header = file_get_contents($header_path);

// The exact string currently in header.php
$old_logo = '<a href="index.php" class="logo-text"><i class="fas fa-plane-departure" style="color: #d4af37; margin-right: 8px;"></i><span style="color: #0f294d;">Nabeel</span> <span style="color: #d4af37;">International</span></a>';

// The new logo structure with the tagline beneath it
$new_logo = <<<HTML
<a href="index.php" style="text-decoration: none; display: flex; flex-direction: column; justify-content: center;">
                <span class="logo-text" style="display: block; margin-bottom: 3px;"><i class="fas fa-plane-departure" style="color: #d4af37; margin-right: 8px;"></i><span style="color: #0f294d;">Nabeel</span> <span style="color: #d4af37;">International</span></span>
                <span class="logo-tagline" style="font-size: 0.85rem; font-family: var(--font-main); color: #64748b; font-weight: 600; margin-left: 48px; letter-spacing: 1.5px; text-transform: uppercase;">Travels and Tours <span style="color:#d4af37;">|</span> Hajj and Umrah</span>
            </a>
HTML;

$header = str_replace($old_logo, $new_logo, $header);

file_put_contents($header_path, $header);
echo "Tagline added under the logo!";
?>
