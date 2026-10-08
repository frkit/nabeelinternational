<?php
$css_file = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_file);

$animations = <<<CSS

/* Dynamic Image Grid Animations */
@keyframes floatUp {
    0% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0); }
}

@keyframes floatDown {
    0% { transform: translateY(0); }
    50% { transform: translateY(15px); }
    100% { transform: translateY(0); }
}

.about-image-grid-4 .img-1 { 
    animation: floatUp 6s ease-in-out infinite; 
}
.about-image-grid-4 .img-2 { 
    animation: floatDown 7s ease-in-out infinite; 
}
.about-image-grid-4 .img-3 { 
    animation: floatDown 6.5s ease-in-out infinite; 
}
.about-image-grid-4 .img-4 { 
    animation: floatUp 7.5s ease-in-out infinite; 
}

/* Pause animation on hover to allow the hover scale effect to take precedence */
.about-image-grid-4 img:hover {
    animation-play-state: paused;
}
CSS;

if (strpos($css, '@keyframes floatUp') === false) {
    file_put_contents($css_file, $css . "\n" . $animations);
    echo "Added floating animations to About Us images!";
} else {
    echo "Animations already exist!";
}
?>
