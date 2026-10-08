<?php
$c = file_get_contents('f:\wamp64\www\nabeel\index.php');

// Extract CTA
if (preg_match('/<!-- Call to Action Section -->.*?<\/section>/s', $c, $m)) {
    $cta = $m[0];
    // Remove CTA from current location
    $c = str_replace($cta, '', $c);
    
    // Insert CTA after Hero Section.
    // The Hero section ends with </section> then comes <section id="services" class="services-intro">
    // Wait, let's insert it before <!-- Services Section --> or <section id="services"
    $c = str_replace('<section id="services"', $cta . "\n\n    <section id=\"services\"", $c);
    
    file_put_contents('f:\wamp64\www\nabeel\index.php', $c);
    echo "Moved CTA successfully!";
} else {
    echo "Could not find CTA block.";
}
?>
