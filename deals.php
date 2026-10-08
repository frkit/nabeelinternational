<?php
$page_title = 'Hot Deals & Offers - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Hot Deals Page Styles */
    body {
        background-color: #fffaf5; /* Very subtle warm background */
    }
    
    .deals-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 160px 5% 120px;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    
    .deals-hero::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0; left: 0;
        background: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/></svg>') repeat;
        z-index: 1;
        opacity: 0.5;
    }
    
    .deals-hero h1 {
        font-family: var(--font-heading);
        font-size: 4.5rem;
        margin-bottom: 20px;
        font-weight: 800;
        position: relative;
        z-index: 2;
        text-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .deals-hero h1 i {
        color: #fbbf24; /* Gold fire */
    }

    .deals-hero p {
        font-size: 1.4rem;
        font-weight: 600;
        max-width: 750px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Deals Grid Section */
    .deals-section {
        padding: 80px 5% 120px;
        position: relative;
        z-index: 3;
        margin-top: -60px;
    }

    .deals-grid {
        max-width: 1300px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 40px;
    }

    .deal-card {
        background: #fff;
        border-radius: 12px;
        padding: 10px;
        box-shadow: 0 20px 40px rgba(239, 68, 68, 0.08);
        border: 2px solid #fee2e2;
        position: relative;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .deal-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 60px rgba(239, 68, 68, 0.15);
        border-color: #d4af37;
    }
    
    /* Discount Badge */
    .discount-badge {
        position: absolute;
        top: -15px;
        right: -15px;
        width: 80px;
        height: 80px;
        background: #d4af37;
        color: #fff;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.2rem;
        line-height: 1.1;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        z-index: 10;
        transform: rotate(10deg);
        border: 4px solid #fff;
    }
    
    .discount-badge span {
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .deal-img-wrapper {
        width: 100%;
        height: 250px;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
    }
    
    .deal-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .deal-card:hover .deal-img {
        transform: scale(1.1);
    }

    /* Timer Strip */
    .deal-timer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(5px);
        color: #fff;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        font-weight: 700;
        font-family: monospace;
        font-size: 1.1rem;
    }
    
    .deal-timer i { color: #fbbf24; }

    .deal-content {
        padding: 25px 15px 15px;
    }

    .deal-content h3 {
        font-family: var(--font-heading);
        font-size: 1.6rem;
        color: #0f172a;
        margin-bottom: 10px;
    }

    .deal-features {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 20px;
    }
    
    .deal-features span {
        background: #f1f5f9;
        color: #475569;
        padding: 5px 12px;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .deal-pricing {
        display: flex;
        align-items: flex-end;
        gap: 15px;
        margin-bottom: 20px;
        padding-top: 15px;
        border-top: 1px dashed #cbd5e1;
    }
    
    .old-price {
        font-size: 1.1rem;
        color: #94a3b8;
        text-decoration: line-through;
        font-weight: 600;
    }
    
    .new-price {
        font-size: 2.2rem;
        color: #d4af37;
        font-weight: 800;
        line-height: 1;
    }

    .btn-deal {
        display: block;
        width: 100%;
        text-align: center;
        padding: 15px;
        background: #0f172a;
        color: #fff;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.3s;
    }
    
    .deal-card:hover .btn-deal {
        background: #d4af37;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    /* Newsletter Section */
    .newsletter-section {
        background: linear-gradient(135deg, #0f294d 0%, #0b1d36 100%);
        padding: 80px 5%;
        text-align: center;
        color: #fff;
        max-width: 1300px;
        margin: 0 auto 100px;
        border-radius: 8px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2);
    }

    .newsletter-section h2 {
        font-family: var(--font-heading);
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .newsletter-section p {
        color: #cbd5e1;
        font-size: 1.1rem;
        margin-bottom: 30px;
    }

    .subscribe-form {
        display: flex;
        max-width: 600px;
        margin: 0 auto;
        background: #fff;
        border-radius: 8px;
        padding: 8px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }
    
    .subscribe-form input {
        flex: 1;
        border: none;
        padding: 15px 25px;
        font-size: 1rem;
        font-family: var(--font-main);
        outline: none;
        background: transparent;
    }
    
    .subscribe-form button {
        background: #d4af37;
        color: #fff;
        border: none;
        padding: 0 30px;
        border-radius: 8px;
        font-weight: 700;
        font-family: var(--font-main);
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .subscribe-form button:hover {
        background: #dc2626;
    }

</style>

    <!-- Vibrant Page Header -->
    <div class="deals-hero">
        <h1><i class="fas fa-fire"></i> Flash Sales & Deals</h1>
        <p>Hurry! These exclusive travel packages and discounted flight rates are only available for a limited time.</p>
    </div>

    <!-- Deals Grid Section -->
    <section class="deals-section">
        <div class="deals-grid">
            
            <!-- Deal 1 -->
            <div class="deal-card">
                <div class="discount-badge">20%<br><span>OFF</span></div>
                <div class="deal-img-wrapper">
                    <img loading="lazy" src="images/umrah.jpg" class="deal-img" alt="Umrah Package">
                    <div class="deal-timer"><i class="fas fa-clock"></i> Ends in: <span class="countdown">48:15:22</span></div>
                </div>
                <div class="deal-content">
                    <h3>Ramadan Umrah Package</h3>
                    <div class="deal-features">
                        <span><i class="fas fa-hotel"></i> 5-Star Hotel</span>
                        <span><i class="fas fa-plane"></i> Direct Flight</span>
                        <span><i class="fas fa-bus"></i> VIP Transport</span>
                    </div>
                    <div class="deal-pricing">
                        <div class="old-price">Rs. 350,000</div>
                        <div class="new-price">Rs. 280,000</div>
                    </div>
                    <a href="contact.php" class="btn-deal">Claim Deal</a>
                </div>
            </div>

            <!-- Deal 2 -->
            <div class="deal-card">
                <div class="discount-badge">30%<br><span>OFF</span></div>
                <div class="deal-img-wrapper">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="deal-img" alt="Dubai">
                    <div class="deal-timer"><i class="fas fa-clock"></i> Ends in: <span class="countdown">24:05:10</span></div>
                </div>
                <div class="deal-content">
                    <h3>Dubai Shopping Festival</h3>
                    <div class="deal-features">
                        <span><i class="fas fa-passport"></i> Free Visa</span>
                        <span><i class="far fa-calendar"></i> 5 Days</span>
                        <span><i class="fas fa-ticket-alt"></i> Safari Included</span>
                    </div>
                    <div class="deal-pricing">
                        <div class="old-price">Rs. 180,000</div>
                        <div class="new-price">Rs. 125,000</div>
                    </div>
                    <a href="contact.php" class="btn-deal">Claim Deal</a>
                </div>
            </div>

            <!-- Deal 3 -->
            <div class="deal-card">
                <div class="discount-badge">Flat<br><span>SALE</span></div>
                <div class="deal-img-wrapper">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="deal-img" alt="Flights">
                    <div class="deal-timer"><i class="fas fa-clock"></i> Ends in: <span class="countdown">72:00:00</span></div>
                </div>
                <div class="deal-content">
                    <h3>Flights to London (LHR)</h3>
                    <div class="deal-features">
                        <span><i class="fas fa-plane"></i> Qatar Airways</span>
                        <span><i class="fas fa-suitcase"></i> 40kg Baggage</span>
                        <span><i class="fas fa-calendar-check"></i> Flexible Dates</span>
                    </div>
                    <div class="deal-pricing">
                        <div class="old-price">Rs. 250,000</div>
                        <div class="new-price">Rs. 199,999</div>
                    </div>
                    <a href="contact.php" class="btn-deal">Claim Deal</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <h2>Don't Miss Secret Deals</h2>
        <p>Subscribe to our WhatsApp/Email newsletter and be the first to know about flash sales before they sell out.</p>
        <form class="subscribe-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Subscribed successfully!');">
            <input type="email" placeholder="Enter your email address..." required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
    
    <!-- Simple JS to animate countdowns slightly (fake live feel) -->
    <script>
        setInterval(() => {
            document.querySelectorAll('.countdown').forEach(el => {
                let parts = el.innerText.split(':');
                let h = parseInt(parts[0]), m = parseInt(parts[1]), s = parseInt(parts[2]);
                s--;
                if(s < 0) { s = 59; m--; }
                if(m < 0) { m = 59; h--; }
                if(h < 0) h = 0;
                el.innerText = 
                    (h < 10 ? '0'+h : h) + ':' + 
                    (m < 10 ? '0'+m : m) + ':' + 
                    (s < 10 ? '0'+s : s);
            });
        }, 1000);
    </script>

<?php require 'layout/footer.php'; ?>