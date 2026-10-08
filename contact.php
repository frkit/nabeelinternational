<?php
$page_title = 'Contact Us - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Premium Redesign for Contact Page */
    :root {
        --contact-primary: #0f294d;
        --contact-accent: #3A86FF;
        --contact-bg: #f4f7fb;
    }

    body {
        background-color: var(--contact-bg);
    }
    
    .contact-hero {
        background: url('https://images.unsplash.com/photo-1596524430615-b46475ddff6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
        padding: 200px 5% 180px;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .contact-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(58, 134, 255, 0.6) 100%);
    }

    .contact-hero-content {
        position: relative;
        z-index: 2;
    }
    
    .contact-hero h1 {
        font-family: var(--font-heading);
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .contact-hero p {
        font-size: 1.4rem;
        max-width: 650px;
        margin: 0 auto;
        opacity: 0.95;
    }

    /* Floating Contact Cards */
    .info-section {
        padding: 0 5%;
        margin-top: -100px;
        position: relative;
        z-index: 10;
        max-width: 1300px;
        margin-left: auto;
        margin-right: auto;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .info-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border: 1px solid rgba(255, 255, 255, 0.8);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .info-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 4px;
        background: var(--contact-accent);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }

    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(58, 134, 255, 0.15);
    }
    
    .info-card:hover::before {
        transform: scaleX(1);
    }

    .icon-wrapper {
        width: 80px;
        height: 80px;
        background: #f0f4f8;
        color: var(--contact-accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        margin: 0 auto 25px;
        transition: all 0.4s ease;
    }
    
    .info-card:hover .icon-wrapper {
        background: var(--contact-accent);
        color: #fff;
        transform: rotateY(360deg);
    }

    .info-card h3 {
        font-family: var(--font-heading);
        font-size: 1.5rem;
        color: var(--contact-primary);
        margin-bottom: 15px;
        font-weight: 800;
    }

    .info-card p {
        color: #555;
        font-size: 1.05rem;
        line-height: 1.7;
        margin: 0;
    }
    
    .info-card a {
        color: #555;
        text-decoration: none;
        transition: color 0.3s;
        font-weight: 600;
    }
    
    .info-card a:hover {
        color: var(--contact-accent);
    }

    /* Form & Map Section */
    .form-map-section {
        padding: 100px 5%;
        max-width: 1300px;
        margin: 0 auto;
    }
    
    .form-map-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 25px 60px rgba(0,0,0,0.06);
        border: 1px solid #eef2f6;
    }

    @media (max-width: 992px) {
        .form-map-container {
            grid-template-columns: 1fr;
        }
    }

    /* The Form */
    .contact-form-container {
        padding: 60px;
    }

    .contact-form-container h2 {
        font-family: var(--font-heading);
        font-size: 3rem;
        color: var(--contact-primary);
        margin-bottom: 15px;
        font-weight: 800;
    }
    
    .contact-form-container p {
        color: #666;
        margin-bottom: 40px;
        font-size: 1.15rem;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
    }
    
    @media (max-width: 600px) {
        .form-row { grid-template-columns: 1fr; }
    }

    .form-control {
        width: 100%;
        padding: 18px 25px;
        background: #f8fafc;
        border: 2px solid transparent;
        border-radius: 12px;
        font-family: var(--font-main);
        font-size: 1.05rem;
        color: #333;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        background: #fff;
        border-color: var(--contact-accent);
        box-shadow: 0 10px 20px rgba(58, 134, 255, 0.1);
    }
    
    textarea.form-control {
        resize: vertical;
        min-height: 180px;
    }

    .btn-submit {
        background: var(--contact-accent);
        color: #fff;
        border: none;
        padding: 20px 50px;
        border-radius: 100px;
        font-family: var(--font-main);
        font-weight: 700;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 15px;
        width: 100%;
        justify-content: center;
    }

    .btn-submit:hover {
        background: #2563eb;
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(37, 99, 235, 0.3);
    }

    /* The Map */
    .map-container {
        height: 100%;
        min-height: 500px;
        background: #e2e8f0;
        position: relative;
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
        position: absolute;
        inset: 0;
    }
</style>

<!-- Premium Page Header -->
<div class="contact-hero">
    <div class="contact-hero-content">
        <h1>We're Here to Help</h1>
        <p>Whether you're planning a trip or need immediate assistance, our dedicated travel experts are available 24/7.</p>
    </div>
</div>

<!-- Contact Info Cards -->
<section class="info-section">
    <div class="info-grid">
        
        <div class="info-card">
            <div class="icon-wrapper"><i class="fas fa-map-marker-alt"></i></div>
            <h3>Head Office</h3>
            <p>Office No. 123, ABC Plaza<br>Main Boulevard, Gulberg<br>Lahore, Pakistan</p>
        </div>
        
        <div class="info-card">
            <div class="icon-wrapper"><i class="fab fa-whatsapp"></i></div>
            <h3>Call or Chat</h3>
            <p style="margin-bottom: 5px;"><strong>UAN:</strong> <a href="tel:+923401192123">+92 340 1192123</a></p>
            <p><strong>WhatsApp:</strong> <a href="https://wa.me/923401192123" target="_blank">+92 340 1192123</a></p>
        </div>
        
        <div class="info-card">
            <div class="icon-wrapper"><i class="fas fa-envelope-open-text"></i></div>
            <h3>Email Us</h3>
            <p style="margin-bottom: 5px;"><strong>Booking:</strong> <a href="mailto:booking@nabeelinternational.com">booking@nabeel.com</a></p>
            <p><strong>Support:</strong> <a href="mailto:info@nabeelinternational.com">info@nabeel.com</a></p>
        </div>
        
        <div class="info-card">
            <div class="icon-wrapper"><i class="fas fa-business-time"></i></div>
            <h3>Working Hours</h3>
            <p><strong>Mon - Sat:</strong> 9:00 AM - 6:00 PM<br><strong>Sunday:</strong> Closed<br><em style="color: var(--contact-accent); font-weight:600;">*24/7 Emergency Support</em></p>
        </div>

    </div>
</section>

<!-- Form and Map Section -->
<section class="form-map-section">
    <div class="form-map-container">
        
        <!-- Contact Form -->
        <div class="contact-form-container">
            <h2>Send a Message</h2>
            <p>Fill out the form below and one of our travel consultants will get back to you within a few hours.</p>
            
            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you for contacting us! Our team will get back to you shortly.');">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email Address" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone / WhatsApp Number" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" required style="color:#555;">
                            <option value="" disabled selected>Select Service Required</option>
                            <option value="flights">Flight Ticketing</option>
                            <option value="visa">Visa Assistance</option>
                            <option value="umrah">Umrah / Hajj Packages</option>
                            <option value="tour">Holiday Tours</option>
                            <option value="corporate">Corporate Travel</option>
                            <option value="other">Other Inquiry</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <textarea class="form-control" placeholder="Tell us more about your travel plans or inquiry..." required></textarea>
                </div>
                
                <button type="submit" class="btn-submit">Send Message <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
        
        <!-- Google Map iframe -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13606.39891823354!2d74.336499!3d31.5076945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045b141a0211%3A0x6b4fb6c5b08e56b!2sGulberg%20III%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696660000000!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>
</section>

<?php require 'layout/footer.php'; ?>
