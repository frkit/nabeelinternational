<?php
$page_title = 'Sitemap - Nabeel International';
require 'layout/header.php';
?>

<style>
    .legal-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(58, 134, 255, 0.8) 100%), url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 150px 5% 100px;
        text-align: center;
        color: #fff;
    }
    .legal-hero h1 { font-size: 3.5rem; font-family: var(--font-heading); margin-bottom: 20px; }
    .legal-content { max-width: 900px; margin: 60px auto; padding: 0 5%; line-height: 1.8; color: #444; }
    
    .sitemap-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-top: 40px;
    }
    .sitemap-col h3 {
        color: #0f294d;
        font-family: var(--font-heading);
        margin-bottom: 20px;
        font-size: 1.5rem;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 10px;
    }
    .sitemap-col ul {
        list-style: none;
        padding: 0;
    }
    .sitemap-col ul li {
        margin-bottom: 12px;
    }
    .sitemap-col ul li a {
        color: #3A86FF;
        text-decoration: none;
        font-size: 1.1rem;
        transition: all 0.3s;
    }
    .sitemap-col ul li a:hover {
        color: #0f294d;
        padding-left: 5px;
    }
</style>

<div class="legal-hero">
    <h1>Sitemap</h1>
    <p>Navigate our website easily</p>
</div>

<div class="legal-content">
    <div class="sitemap-grid">
        <div class="sitemap-col">
            <h3>Main Pages</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faq.php">FAQs</a></li>
                <li><a href="management.php">Management Team</a></li>
            </ul>
        </div>
        
        <div class="sitemap-col">
            <h3>Our Services</h3>
            <ul>
                <li><a href="flights.php">Flight Bookings</a></li>
                <li><a href="visa.php">Visa Assistance</a></li>
                <li><a href="umrah.php">Umrah & Hajj Packages</a></li>
                <li><a href="world-tours.php">Worldwide Tours</a></li>
                <li><a href="pakistan-tours.php">Pakistan Tours</a></li>
                <li><a href="corporate.php">Corporate Travel</a></li>
                <li><a href="insurance.php">Travel Insurance</a></li>
                <li><a href="study.php">Study Abroad</a></li>
            </ul>
        </div>
        
        <div class="sitemap-col">
            <h3>Legal</h3>
            <ul>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="cookie.php">Cookie Policy</a></li>
                <li><a href="refund.php">Refund Policy</a></li>
            </ul>
        </div>
    </div>
</div>

<?php require 'layout/footer.php'; ?>
