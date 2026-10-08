<?php
$contact_content = <<<HTML
<?php
\$page_title = 'Contact Us - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Premium Contact Page Styles */
    body {
        background-color: #f8fbff;
    }
    
    .contact-hero {
        background: linear-gradient(135deg, rgba(11, 17, 32, 0.9) 0%, rgba(58, 134, 255, 0.8) 100%), url('https://images.unsplash.com/photo-1596524430615-b46475ddff6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 160px 5% 100px;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    
    .contact-hero h1 {
        font-family: var(--font-heading);
        font-size: 4.5rem;
        margin-bottom: 20px;
        font-weight: 800;
        position: relative;
        z-index: 2;
    }

    .contact-hero p {
        font-size: 1.3rem;
        font-weight: 300;
        max-width: 750px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        color: #e2e8f0;
    }

    /* Contact Info Cards */
    .info-section {
        padding: 60px 5%;
        margin-top: -80px;
        position: relative;
        z-index: 3;
    }

    .info-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .info-card {
        background: #fff;
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 15px 35px rgba(0,0,0,0.06);
        border: 1px solid rgba(226, 232, 240, 0.8);
        transition: all 0.4s ease;
    }
    
    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(58, 134, 255, 0.15);
        border-color: rgba(58, 134, 255, 0.3);
    }
    
    .icon-wrapper {
        width: 70px;
        height: 70px;
        background: #f1f5f9;
        color: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 20px;
        transition: all 0.4s ease;
    }
    
    .info-card:hover .icon-wrapper {
        background: var(--primary-color);
        color: #fff;
        transform: scale(1.1);
    }

    .info-card h3 {
        font-family: var(--font-heading);
        font-size: 1.4rem;
        color: #0f172a;
        margin-bottom: 15px;
    }

    .info-card p {
        color: #64748b;
        font-size: 1rem;
        line-height: 1.6;
        margin: 0;
    }
    
    .info-card a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.3s;
    }
    
    .info-card a:hover {
        color: var(--primary-color);
    }

    /* Form & Map Section */
    .form-map-section {
        padding: 60px 5% 100px;
    }
    
    .form-map-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        background: #fff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.05);
        border: 1px solid rgba(226, 232, 240, 0.8);
    }

    @media (max-width: 900px) {
        .form-map-container {
            grid-template-columns: 1fr;
        }
    }

    /* The Form */
    .contact-form-container {
        padding: 50px;
    }

    .contact-form-container h2 {
        font-family: var(--font-heading);
        font-size: 2.5rem;
        color: #0f172a;
        margin-bottom: 10px;
    }
    
    .contact-form-container p {
        color: #64748b;
        margin-bottom: 30px;
        font-size: 1.05rem;
    }

    .form-group {
        margin-bottom: 25px;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    @media (max-width: 600px) {
        .form-row { grid-template-columns: 1fr; }
    }

    .form-control {
        width: 100%;
        padding: 15px 20px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        font-family: var(--font-main);
        font-size: 1rem;
        color: #334155;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        background: #fff;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(58, 134, 255, 0.1);
    }
    
    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }

    .btn-submit {
        background: var(--primary-color);
        color: #fff;
        border: none;
        padding: 16px 40px;
        border-radius: 30px;
        font-family: var(--font-main);
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-submit:hover {
        background: #2563eb;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
    }

    /* The Map */
    .map-container {
        height: 100%;
        min-height: 400px;
        background: #e2e8f0;
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

</style>

    <!-- Vibrant Page Header -->
    <div class="contact-hero">
        <h1>Get in Touch</h1>
        <p>Whether you need to book a flight, customize a tour, or ask about visa requirements, our dedicated team is ready to assist you 24/7.</p>
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
                <div class="icon-wrapper"><i class="fas fa-phone-alt"></i></div>
                <h3>Call Us</h3>
                <p><strong>UAN:</strong> <a href="tel:+923401192123">+92 340 1192123</a><br><strong>WhatsApp:</strong> <a href="https://wa.me/923401192123" target="_blank">+92 340 1192123</a></p>
            </div>
            
            <div class="info-card">
                <div class="icon-wrapper"><i class="fas fa-envelope"></i></div>
                <h3>Email Us</h3>
                <p><strong>Booking:</strong><br><a href="mailto:booking@nabeelinternational.com">booking@nabeelinternational.com</a><br><strong>Support:</strong><br><a href="mailto:info@nabeelinternational.com">info@nabeelinternational.com</a></p>
            </div>
            
            <div class="info-card">
                <div class="icon-wrapper"><i class="fas fa-clock"></i></div>
                <h3>Working Hours</h3>
                <p><strong>Mon - Sat:</strong> 9:00 AM - 6:00 PM<br><strong>Sunday:</strong> Closed<br><em>*24/7 Emergency Support Available</em></p>
            </div>

        </div>
    </section>

    <!-- Form and Map Section -->
    <section class="form-map-section">
        <div class="form-map-container">
            
            <!-- Contact Form -->
            <div class="contact-form-container">
                <h2>Send a Message</h2>
                <p>Fill out the form below and one of our travel consultants will get back to you within 24 hours.</p>
                
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you for contacting us! We will get back to you shortly.');">
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
                            <select class="form-control" required>
                                <option value="" disabled selected>Select Service Required</option>
                                <option value="flights">Flight Ticketing</option>
                                <option value="visa">Visa Assistance</option>
                                <option value="umrah">Umrah / Hajj</option>
                                <option value="tour">Holiday Tour Package</option>
                                <option value="corporate">Corporate Travel</option>
                                <option value="other">Other Inquiry</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Write your message or inquiry details here..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Send Message <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
            
            <!-- Google Map iframe -->
            <div class="map-container">
                <!-- Embedded map of Lahore (Gulberg area) for representation -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13606.39891823354!2d74.336499!3d31.5076945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045b141a0211%3A0x6b4fb6c5b08e56b!2sGulberg%20III%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696660000000!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\contact.php', $contact_content);
echo "contact.php redesigned to a strong, premium layout!";
?>
