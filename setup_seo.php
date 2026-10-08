<?php
// 1. Update header.php with robust SEO tags
$header_path = 'f:\wamp64\www\nabeel\layout\header.php';
$header = file_get_contents($header_path);

// We need to inject standard SEO tags if they don't exist
if (strpos($header, 'property="og:title"') === false) {
    // We will replace the existing basic <title> and <meta name="description"> with dynamic robust SEO setup
    
    // First, let's extract out the exact basic tags to replace
    $basic_seo = <<<HTML
    <title><?= \$page_title ?? 'Nabeel International' ?></title>
    <meta name="description" content="Nabeel International Tour Operators (Pvt. Ltd.) - Your Journey. Our Commitment. Providing reliable travel solutions, Umrah, Hajj, and holiday packages.">
HTML;

    $robust_seo = <<<HTML
    <?php
    \$site_url = "https://www.nabeelinternational.com"; // Change to actual domain later
    \$current_url = \$site_url . \$_SERVER['REQUEST_URI'];
    \$seo_title = \$page_title ?? 'Nabeel International Tour Operators';
    \$seo_desc = \$page_desc ?? 'Nabeel International Tour Operators (Pvt. Ltd.) - Your Journey. Our Commitment. Providing reliable travel solutions, Umrah, Hajj, corporate travel, and holiday packages worldwide.';
    \$seo_image = \$site_url . '/images/social-preview.jpg'; // Recommended 1200x630 image
    ?>
    <title><?= \$seo_title ?></title>
    <meta name="description" content="<?= \$seo_desc ?>">
    <link rel="canonical" href="<?= \$current_url ?>">
    
    <!-- Open Graph (Facebook, LinkedIn, ChatGPT/Discord) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= \$current_url ?>">
    <meta property="og:title" content="<?= \$seo_title ?>">
    <meta property="og:description" content="<?= \$seo_desc ?>">
    <meta property="og:image" content="<?= \$seo_image ?>">
    <meta property="og:site_name" content="Nabeel International">
    
    <!-- Twitter Cards (X) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= \$current_url ?>">
    <meta name="twitter:title" content="<?= \$seo_title ?>">
    <meta name="twitter:description" content="<?= \$seo_desc ?>">
    <meta name="twitter:image" content="<?= \$seo_image ?>">
    
    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#3A86FF">
    
    <!-- JSON-LD Structured Data for Google & Bing -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TravelAgency",
      "name": "Nabeel International Tour Operators",
      "image": "<?= \$seo_image ?>",
      "@id": "<?= \$site_url ?>",
      "url": "<?= \$site_url ?>",
      "telephone": "+923401192123",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Office No. 123, ABC Plaza, Main Boulevard, Gulberg",
        "addressLocality": "Lahore",
        "postalCode": "54000",
        "addressCountry": "PK"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 31.5076945,
        "longitude": 74.336499
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/nabeelinternational",
        "https://twitter.com/nabeelint",
        "https://www.instagram.com/nabeelinternational",
        "https://www.linkedin.com/company/nabeelinternational"
      ]
    }
    </script>
HTML;

    // Replace basic with robust
    $header = str_replace($basic_seo, $robust_seo, $header);
    file_put_contents($header_path, $header);
    echo "header.php updated with Open Graph, Twitter Cards, and JSON-LD!\n";
} else {
    echo "SEO tags already exist in header.php!\n";
}

// 2. Generate robots.txt
$robots_path = 'f:\wamp64\www\nabeel\robots.txt';
$robots_content = <<<TXT
User-agent: *
Allow: /
Disallow: /admin/
Disallow: /layout/
Disallow: /setup_*.php
Disallow: /force_*.php

Sitemap: https://www.nabeelinternational.com/sitemap.xml
TXT;

file_put_contents($robots_path, $robots_content);
echo "robots.txt generated!\n";

// 3. Generate sitemap.xml dynamically
$sitemap_path = 'f:\wamp64\www\nabeel\sitemap.xml';
$files = glob('f:\wamp64\www\nabeel\*.php');
$date = date('Y-m-d');

$sitemap_xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$sitemap_xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($files as $file) {
    $filename = basename($file);
    
    // Exclude development scripts and partials
    if (strpos($filename, 'setup_') !== false || 
        strpos($filename, 'add_') !== false || 
        strpos($filename, 'force_') !== false || 
        strpos($filename, 'update_') !== false ||
        strpos($filename, 'optimize_') !== false ||
        $filename === 'template.html' || 
        $filename === 'layout') {
        continue;
    }
    
    // Priority logic
    $priority = "0.8";
    if ($filename === 'index.php') {
        $priority = "1.0";
    } elseif (in_array($filename, ['about.php', 'contact.php', 'umrah.php', 'flights.php', 'visa.php'])) {
        $priority = "0.9";
    }

    $sitemap_xml .= "  <url>\n";
    $sitemap_xml .= "    <loc>https://www.nabeelinternational.com/" . ($filename === 'index.php' ? '' : $filename) . "</loc>\n";
    $sitemap_xml .= "    <lastmod>{$date}</lastmod>\n";
    $sitemap_xml .= "    <changefreq>weekly</changefreq>\n";
    $sitemap_xml .= "    <priority>{$priority}</priority>\n";
    $sitemap_xml .= "  </url>\n";
}

$sitemap_xml .= "</urlset>";

file_put_contents($sitemap_path, $sitemap_xml);
echo "sitemap.xml generated with all relevant PHP pages!\n";

?>
