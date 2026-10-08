<?php
$umrah_html = <<<HTML
<?php
\$page_title = 'Umrah Packages - Nabeel International';
require 'layout/header.php';
?>
    <!-- Page Header -->
    <div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url('images/umrah.jpg') center/cover;">
        <h1>Spiritual Journeys</h1>
        <p>Premium Umrah Packages Tailored for Your Peace of Mind</p>
    </div>

    <!-- Intro Section -->
    <section class="umrah-intro">
        <div class="umrah-intro-content">
            <h2 class="section-title">Embark on a Sacred Journey</h2>
            <p>At Nabeel International, we understand the profound significance of Umrah. Our specially curated packages ensure that every logistical detail is handled with care—from fast visa processing to comfortable accommodations near the Haram. Focus entirely on your prayers and let us manage the rest.</p>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="packages-section">
        <h2 class="section-title">Our Umrah Packages</h2>
        <div class="packages-grid">
            <!-- Economy Package -->
            <div class="pkg-card">
                <div class="pkg-header" style="background-color: #3498db;">
                    <h3>Economy Star</h3>
                    <div class="pkg-price">Starting from <span>$899</span></div>
                </div>
                <div class="pkg-body">
                    <ul>
                        <li><i class="fas fa-check"></i> Umrah Visa Processing</li>
                        <li><i class="fas fa-plane"></i> Return Air Tickets</li>
                        <li><i class="fas fa-hotel"></i> 3-Star Hotels (Makkah & Madinah)</li>
                        <li><i class="fas fa-bus"></i> Shared Transport</li>
                        <li><i class="fas fa-map-marked-alt"></i> Guided Ziyarat</li>
                    </ul>
                    <a href="contact.php?package=economy" class="btn-primary" style="width: 100%; margin-top: 20px; background-color: #3498db; border-radius: 8px; text-align: center; display: block; padding: 15px;">Book Economy</a>
                </div>
            </div>

            <!-- Premium Package -->
            <div class="pkg-card pkg-featured">
                <div class="pkg-badge">Most Popular</div>
                <div class="pkg-header" style="background-color: var(--secondary-color);">
                    <h3>Premium Gold</h3>
                    <div class="pkg-price">Starting from <span>$1,499</span></div>
                </div>
                <div class="pkg-body">
                    <ul>
                        <li><i class="fas fa-check"></i> VIP Visa Processing</li>
                        <li><i class="fas fa-plane"></i> Direct Flights</li>
                        <li><i class="fas fa-hotel"></i> 4-Star Hotels (Near Haram)</li>
                        <li><i class="fas fa-car"></i> Private Sedan Transport</li>
                        <li><i class="fas fa-map-marked-alt"></i> Private Guided Ziyarat</li>
                        <li><i class="fas fa-user-tie"></i> Dedicated Mutawwif</li>
                    </ul>
                    <a href="contact.php?package=premium" class="btn-primary" style="width: 100%; margin-top: 20px; border-radius: 8px; text-align: center; display: block; padding: 15px;">Book Premium</a>
                </div>
            </div>

            <!-- VIP Package -->
            <div class="pkg-card">
                <div class="pkg-header" style="background-color: #2c3e50;">
                    <h3>VIP Platinum</h3>
                    <div class="pkg-price">Starting from <span>$2,999</span></div>
                </div>
                <div class="pkg-body">
                    <ul>
                        <li><i class="fas fa-check"></i> Express VIP Visa Processing</li>
                        <li><i class="fas fa-plane"></i> Business Class Flights</li>
                        <li><i class="fas fa-hotel"></i> 5-Star Luxury Hotels (Frontline)</li>
                        <li><i class="fas fa-car-side"></i> Luxury SUV Transport</li>
                        <li><i class="fas fa-map-marked-alt"></i> VIP Ziyarat Tour</li>
                        <li><i class="fas fa-concierge-bell"></i> 24/7 Concierge Service</li>
                    </ul>
                    <a href="contact.php?package=vip" class="btn-primary" style="width: 100%; margin-top: 20px; background-color: #2c3e50; border-radius: 8px; text-align: center; display: block; padding: 15px;">Book VIP</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Included Features -->
    <section class="included-section">
        <h2 class="section-title">What's Included in All Packages</h2>
        <div class="included-grid">
            <div class="inc-box">
                <i class="fas fa-passport"></i>
                <h4>Visa Assistance</h4>
                <p>Hassle-free electronic visa processing.</p>
            </div>
            <div class="inc-box">
                <i class="fas fa-ticket-alt"></i>
                <h4>Airfare</h4>
                <p>Confirmed round-trip tickets.</p>
            </div>
            <div class="inc-box">
                <i class="fas fa-hotel"></i>
                <h4>Accommodations</h4>
                <p>Pre-booked quality hotels in both Holy cities.</p>
            </div>
            <div class="inc-box">
                <i class="fas fa-bus-alt"></i>
                <h4>Transfers</h4>
                <p>Jeddah - Makkah - Madinah - Airport transfers.</p>
            </div>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\umrah.php', $umrah_html);


$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_add = <<<CSS

        /* Umrah Packages Page */
        .umrah-intro {
            padding: 80px 5%;
            text-align: center;
            background: #fff;
        }

        .umrah-intro-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .umrah-intro-content p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
        }

        .packages-section {
            padding: 60px 5% 100px;
            background: #f8f9fa;
        }

        .packages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: center;
        }

        .pkg-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.4s ease;
            position: relative;
        }

        .pkg-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .pkg-featured {
            transform: scale(1.05);
            border: 2px solid var(--secondary-color);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.2);
            z-index: 2;
        }
        
        .pkg-featured:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .pkg-badge {
            position: absolute;
            top: 15px;
            right: -35px;
            background: var(--secondary-color);
            color: #fff;
            padding: 8px 40px;
            font-size: 0.85rem;
            font-weight: bold;
            transform: rotate(45deg);
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .pkg-header {
            padding: 40px 20px;
            text-align: center;
            color: #fff;
        }

        .pkg-header h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            font-family: var(--font-heading);
        }

        .pkg-price {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .pkg-price span {
            display: block;
            font-size: 2.5rem;
            font-weight: 800;
            margin-top: 5px;
        }

        .pkg-body {
            padding: 40px 30px;
        }

        .pkg-body ul {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
        }

        .pkg-body ul li {
            margin-bottom: 15px;
            color: #555;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.05rem;
        }

        .pkg-body ul li i {
            color: var(--secondary-color);
            width: 20px;
            text-align: center;
        }

        .included-section {
            padding: 80px 5%;
            background: #fff;
            text-align: center;
        }

        .included-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .inc-box {
            padding: 40px 20px;
            background: #f8f9fa;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .inc-box:hover {
            background: var(--primary-color);
            color: #fff;
            transform: translateY(-5px);
        }

        .inc-box i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .inc-box:hover i { color: #fff; }
        .inc-box:hover p { color: rgba(255,255,255,0.8); }

        .inc-box h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .inc-box p {
            color: #666;
            font-size: 0.95rem;
        }
CSS;

$css .= $css_add;

// Adjust media query for featured pkg
$css = str_replace('@media (max-width: 992px) {', "@media (max-width: 992px) {\n            .pkg-featured { transform: scale(1); }\n            .pkg-featured:hover { transform: translateY(-4px); }", $css);

file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

echo "umrah.php completed!";
?>
