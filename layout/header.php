<?php if(!ob_start("ob_gzhandler")) ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $site_url = "https://www.nabeelinternational.com"; // Change to actual domain later
    $current_url = $site_url . $_SERVER['REQUEST_URI'];
    $seo_title = $page_title ?? 'Nabeel International Tour Operators';
    $seo_desc = $page_desc ?? 'Nabeel International Tour Operators (Pvt. Ltd.) - Your Journey. Our Commitment. Providing reliable travel solutions, Umrah, Hajj, corporate travel, and holiday packages worldwide.';
    $seo_image = $site_url . '/images/social-preview.jpg'; // Recommended 1200x630 image
    ?>
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_desc ?>">
    <link rel="canonical" href="<?= $current_url ?>">
    
    <!-- Open Graph (Facebook, LinkedIn, ChatGPT/Discord) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $current_url ?>">
    <meta property="og:title" content="<?= $seo_title ?>">
    <meta property="og:description" content="<?= $seo_desc ?>">
    <meta property="og:image" content="<?= $seo_image ?>">
    <meta property="og:site_name" content="Nabeel International">
    
    <!-- Twitter Cards (X) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= $current_url ?>">
    <meta name="twitter:title" content="<?= $seo_title ?>">
    <meta name="twitter:description" content="<?= $seo_desc ?>">
    <meta name="twitter:image" content="<?= $seo_image ?>">
    
    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#3A86FF">
    
    <!-- JSON-LD Structured Data for Google & Bing -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TravelAgency",
      "name": "Nabeel International Tour Operators",
      "image": "<?= $seo_image ?>",
      "@id": "<?= $site_url ?>",
      "url": "<?= $site_url ?>",
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
        <!-- Performance Optimizations -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="layout/style.css">

</head>
<body>

    <!-- Mobile Menu Overlay Backdrop -->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

    <!-- Topbar -->
    <div class="topbar">
        <div class="topbar-left">
            <div class="topbar-contact-item"><i class="fas fa-phone-alt"></i> +92 340 1192123</div>
            <div class="topbar-contact-item"><i class="fas fa-envelope"></i> info@nabeelinternational.com</div>
            <div class="topbar-contact-item topbar-hide-sm"><i class="fas fa-globe"></i> www.nabeelinternational.com</div>
        </div>
        <div class="topbar-right">
            <div class="topbar-contact-item topbar-hide-md"><i class="fas fa-map-marker-alt"></i> Office No. 123, ABC Plaza, Main Boulevard, Lahore</div>
            <div class="lang-switcher">
                <div class="lang-active">
                    <i class="fas fa-globe"></i> <span id="current-lang">English</span> <i class="fas fa-chevron-down" style="font-size:0.7rem;"></i>
                </div>
                <div class="lang-dropdown">
                    <div class="lang-option" onclick="changeLanguage('en', 'English')">English</div>
                    <div class="lang-option" onclick="changeLanguage('ur', 'Urdu')">Urdu</div>
                    <div class="lang-option" onclick="changeLanguage('ar', 'Arabic')">Arabic</div>
                </div>
            </div>
            <div class="topbar-social">
                <a href="#" class="social-fb" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-tw" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-ig" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-in" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://wa.me/923401192123" class="social-wa" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- News Ticker -->
    <div class="news-ticker">
        <div class="ticker-title">LATEST UPDATES</div>
        <div class="ticker-wrap">
            <div class="ticker-move">
                <span class="ticker-item"><i class="fas fa-star" style="color:var(--secondary-color); font-size: 0.7rem; margin-right:5px;"></i> Special Discounts on Group Umrah Packages for the upcoming season!</span>
                <span class="ticker-item"><i class="fas fa-star" style="color:var(--secondary-color); font-size: 0.7rem; margin-right:5px;"></i> Booking open for Summer International Holidays. Grab the best deals now.</span>
                <span class="ticker-item"><i class="fas fa-star" style="color:var(--secondary-color); font-size: 0.7rem; margin-right:5px;"></i> Fast-track Visa Assistance available for Europe and Middle East.</span>
                <span class="ticker-item"><i class="fas fa-star" style="color:var(--secondary-color); font-size: 0.7rem; margin-right:5px;"></i> Contact us today for Corporate Travel Management Solutions!</span>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="index.php">
                <i class="fas fa-plane-departure logo-icon"></i>
                <div class="logo-wrapper">
                    <span class="logo-text"><span class="logo-text-navy">Nabeel</span> <span class="logo-text-gold">International</span></span>
                    <span class="logo-tagline">Travels and Tours <span style="color:#d4af37;">|</span> Hajj and Umrah</span>
                </div>
            </a>
        </div>
        <ul class="nav-links" id="nav-links">
            <li class="mobile-drawer-header">
                <div class="mobile-drawer-logo">
                    <i class="fas fa-plane-departure" style="color: #d4af37; font-size: 1.4rem;"></i>
                    <span style="font-family: var(--font-heading); font-weight: 800; color: #0f294d; font-size: 1.1rem;">Nabeel <span style="color:#d4af37;">Int.</span></span>
                </div>
                <div class="mobile-drawer-close" id="mobile-drawer-close" aria-label="Close menu">
                    <i class="fas fa-times"></i>
                </div>
            </li>
            <li><a href="index.php">Home</a></li>
            <!-- About Dropdown -->
            <li class="dropdown">
                <a href="about.php" class="dropdown-toggle">About Us <i class="fas fa-chevron-down dropdown-icon"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="about.php"><i class="fas fa-building"></i> Our Company</a></li>
                    <li><a href="management.php"><i class="fas fa-users"></i> Management Team</a></li>
                    <li><a href="career.php"><i class="fas fa-handshake"></i> Careers</a></li>
                </ul>
            </li>
            
            <!-- Services Dropdown -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Services <i class="fas fa-chevron-down dropdown-icon"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="flights.php"><i class="fas fa-plane"></i> Flights</a></li>
                    <li><a href="visa.php"><i class="fas fa-passport"></i> Visa Assistance</a></li>
                    <li><a href="study.php"><i class="fas fa-user-graduate"></i> Study Abroad</a></li>
                    <li><a href="insurance.php"><i class="fas fa-shield-alt"></i> Travel Insurance</a></li>
                    <li><a href="corporate.php"><i class="fas fa-briefcase"></i> Corporate Travel</a></li>
                </ul>
            </li>

            <!-- Tours Dropdown -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Tours & Packages <i class="fas fa-chevron-down dropdown-icon"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="umrah.php"><i class="fas fa-kaaba"></i> Umrah Packages</a></li>
                    <li><a href="hajj.php"><i class="fas fa-mosque"></i> Hajj Packages</a></li>
                    <li><a href="world-tours.php"><i class="fas fa-globe-americas"></i> World Tours</a></li>
                    <li><a href="pakistan-tours.php"><i class="fas fa-mountain"></i> Pakistan Tours</a></li>
                </ul>
            </li>
            
            <!-- Resources Dropdown -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Resources <i class="fas fa-chevron-down dropdown-icon"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="media.php"><i class="fas fa-photo-video"></i> Media Gallery</a></li>
                    <li><a href="faq.php"><i class="fas fa-question-circle"></i> FAQs</a></li>
                    <li><a href="vlog.php"><i class="fas fa-video"></i> Travel Vlog</a></li>
                    <li><a href="testimonials.php"><i class="fas fa-star"></i> Testimonials</a></li>
                </ul>
            </li>

            <li><a href="deals.php" style="color: #d32f2f;"><i class="fas fa-fire" style="margin-right: 3px;"></i> Deals</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            
            <!-- Mobile Navigation CTA Action Buttons -->
            <li class="mobile-nav-actions">
                <a href="https://wa.me/923401192123" target="_blank" class="btn-whatsapp-mobile">
                    <div class="btn-mobile-icon"><i class="fab fa-whatsapp"></i></div>
                    <div class="btn-mobile-text">
                        <span class="btn-mobile-title">WhatsApp Us</span>
                        <span class="btn-mobile-sub">24/7 Fast Response</span>
                    </div>
                    <i class="fas fa-chevron-right btn-mobile-arrow"></i>
                </a>
                <a href="contact.php" class="btn-quote-mobile">
                    <div class="btn-mobile-icon"><i class="fas fa-paper-plane"></i></div>
                    <div class="btn-mobile-text">
                        <span class="btn-mobile-title">Plan Your Trip</span>
                        <span class="btn-mobile-sub">Custom Travel Quote</span>
                    </div>
                    <i class="fas fa-chevron-right btn-mobile-arrow"></i>
                </a>
            </li>
        </ul>
        <div class="nav-actions">
            <a href="https://wa.me/923401192123" target="_blank" class="btn-whatsapp hide-mobile"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            <a href="contact.php" class="btn-quote hide-mobile">Plan Your Trip</a>
            <div class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    
