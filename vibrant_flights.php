<?php
$flights_content = <<<HTML
<?php
\$page_title = 'Flight Bookings - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Flights Page Styles */
    .flights-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 120px 5% 180px; /* Extra bottom padding for floating widget */
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .flights-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .flights-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 600px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Floating Search Widget */
    .search-widget-container {
        max-width: 1100px;
        margin: -100px auto 80px;
        position: relative;
        z-index: 10;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        padding: 30px;
    }

    .search-tabs {
        display: flex;
        gap: 15px;
        margin-bottom: 25px;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 15px;
    }

    .search-tab {
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #666;
    }

    .search-tab.active {
        background: rgba(58, 134, 255, 0.1);
        color: var(--primary-color);
    }
    
    .search-tab:hover:not(.active) {
        background: #f4f6f9;
        color: #333;
    }

    .search-form {
        display: grid;
        grid-template-columns: 2fr 2fr 1.5fr 1.5fr 2fr;
        gap: 15px;
        align-items: end;
    }

    .input-group {
        display: flex;
        flex-direction: column;
    }

    .input-group label {
        font-size: 0.85rem;
        color: #666;
        font-weight: 600;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .input-wrapper {
        position: relative;
    }

    .input-wrapper i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary-color);
        font-size: 1.1rem;
    }

    .search-input {
        width: 100%;
        padding: 15px 15px 15px 45px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 1rem;
        color: #333;
        font-family: var(--font-main);
        transition: all 0.3s ease;
        background: #fdfdfd;
    }

    .search-input:focus {
        outline: none;
        border-color: var(--primary-color);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(58, 134, 255, 0.1);
    }

    .btn-search-flight {
        background: var(--primary-color);
        color: #fff;
        padding: 15px 20px;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-search-flight:hover {
        background: #2563eb;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(58, 134, 255, 0.3);
    }

    /* Popular Routes */
    .routes-section {
        padding: 50px 5% 100px;
        background-color: #FFF4F4;
    }
    
    .section-title-color {
        font-family: var(--font-heading);
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 60px;
        text-align: center;
    }

    .routes-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
    }

    .route-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        display: flex;
        align-items: center;
        padding: 20px;
        position: relative;
    }

    .route-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
    }

    .route-image {
        width: 100px;
        height: 100px;
        border-radius: 15px;
        object-fit: cover;
        margin-right: 20px;
    }

    .route-info {
        flex-grow: 1;
    }

    .route-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0b1120;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .route-title i {
        color: var(--secondary-color);
        font-size: 0.9rem;
    }

    .route-airline {
        color: #666;
        font-size: 0.85rem;
        margin-bottom: 10px;
    }

    .route-price {
        font-size: 1.3rem;
        color: var(--primary-color);
        font-weight: 800;
    }

    .route-price span {
        font-size: 0.85rem;
        color: #999;
        font-weight: 400;
    }

    /* Colored Borders for Routes */
    .route-1 { border-left: 6px solid #3A86FF; }
    .route-2 { border-left: 6px solid #9b59b6; }
    .route-3 { border-left: 6px solid #2ecc71; }
    .route-4 { border-left: 6px solid #f39c12; }
    .route-5 { border-left: 6px solid #e74c3c; }
    .route-6 { border-left: 6px solid #1abc9c; }

    /* Features Section */
    .features-section {
        padding: 100px 5%;
        background: #fff;
    }

    .features-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 40px;
        text-align: center;
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        background: rgba(58, 134, 255, 0.1);
        color: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        margin: 0 auto 25px;
        transition: all 0.3s ease;
    }

    .feat-card:hover .feature-icon {
        background: var(--primary-color);
        color: #fff;
        transform: scale(1.1);
    }

    .feat-card h3 {
        font-size: 1.3rem;
        color: #0b1120;
        margin-bottom: 15px;
    }

    .feat-card p {
        color: #666;
        line-height: 1.6;
    }

    /* Vibrant CTA Section */
    .flights-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .flights-cta::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        top: -100px;
        left: -100px;
        z-index: 1;
    }
    
    .flights-cta::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        bottom: -200px;
        right: -100px;
        z-index: 1;
    }

    /* Loading Overlay */
    .search-overlay {
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(255,255,255,0.9);
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .search-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .plane-loader {
        font-size: 4rem;
        color: var(--primary-color);
        animation: flyPlane 2s infinite ease-in-out;
        margin-bottom: 20px;
    }

    @keyframes flyPlane {
        0% { transform: translateX(-50px) translateY(20px) rotate(-15deg) scale(0.8); opacity: 0; }
        50% { transform: translateX(0) translateY(0) rotate(0deg) scale(1.2); opacity: 1; }
        100% { transform: translateX(50px) translateY(-20px) rotate(15deg) scale(0.8); opacity: 0; }
    }

    @media (max-width: 992px) {
        .search-form { grid-template-columns: 1fr 1fr; }
        .btn-search-flight { grid-column: span 2; }
    }
    
    @media (max-width: 768px) {
        .search-form { grid-template-columns: 1fr; }
        .btn-search-flight { grid-column: span 1; }
        .route-card { flex-direction: column; text-align: center; }
        .route-image { margin: 0 0 20px 0; width: 100%; height: 150px; }
        .route-title { justify-content: center; }
    }
</style>

    <!-- Vibrant Page Header -->
    <div class="flights-hero">
        <h1>Book Global Flights</h1>
        <p>Find the best deals on international and domestic flights instantly.</p>
    </div>

    <!-- Floating API Search Widget -->
    <div class="search-widget-container">
        <div class="search-tabs">
            <div class="search-tab active">Round Trip</div>
            <div class="search-tab">One Way</div>
            <div class="search-tab">Multi-City</div>
        </div>
        
        <form class="search-form" onsubmit="event.preventDefault(); simulateSearch();">
            <div class="input-group">
                <label>Leaving From</label>
                <div class="input-wrapper">
                    <i class="fas fa-plane-departure"></i>
                    <input type="text" class="search-input" placeholder="City or Airport" value="Lahore (LHE)" required>
                </div>
            </div>
            
            <div class="input-group">
                <label>Going To</label>
                <div class="input-wrapper">
                    <i class="fas fa-plane-arrival"></i>
                    <input type="text" class="search-input" placeholder="City or Airport" required>
                </div>
            </div>
            
            <div class="input-group">
                <label>Depart</label>
                <div class="input-wrapper">
                    <i class="far fa-calendar-alt"></i>
                    <input type="date" class="search-input" required>
                </div>
            </div>
            
            <div class="input-group">
                <label>Return</label>
                <div class="input-wrapper">
                    <i class="far fa-calendar-check"></i>
                    <input type="date" class="search-input" required>
                </div>
            </div>

            <button type="submit" class="btn-search-flight">
                <i class="fas fa-search"></i> Search Flights
            </button>
        </form>
    </div>

    <!-- Loading Overlay for API Simulation -->
    <div class="search-overlay" id="searchOverlay">
        <i class="fas fa-plane plane-loader"></i>
        <h3 style="font-family: var(--font-heading); color: #0b1120; font-size: 1.8rem;">Searching global airlines...</h3>
        <p style="color: #666; margin-top: 10px;">Connecting to API for best real-time fares</p>
    </div>

    <script>
        function simulateSearch() {
            const overlay = document.getElementById('searchOverlay');
            overlay.classList.add('active');
            
            setTimeout(() => {
                overlay.classList.remove('active');
                alert("API Simulation Complete: Real-time flights retrieved successfully! (This is a demo)");
            }, 2500);
        }
    </script>

    <!-- Popular Routes Section -->
    <section class="routes-section">
        <div class="section-tag-color" style="text-align: center; display: block; width: max-content; margin: 0 auto 15px; color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px;">Trending Fares</div>
        <h2 class="section-title-color" style="margin-bottom: 50px;">Popular Flight Deals</h2>
        
        <div class="routes-grid">
            <!-- Route 1 -->
            <div class="route-card route-1">
                <img loading="lazy" src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Dubai" class="route-image">
                <div class="route-info">
                    <div class="route-title">LHE <i class="fas fa-exchange-alt"></i> DXB</div>
                    <div class="route-airline"><i class="fas fa-plane"></i> Emirates / PIA</div>
                    <div class="route-price">Rs. 85,000 <span>/ Return</span></div>
                </div>
            </div>

            <!-- Route 2 -->
            <div class="route-card route-2">
                <img loading="lazy" src="images/istanbul.jpg" alt="Istanbul" class="route-image">
                <div class="route-info">
                    <div class="route-title">ISB <i class="fas fa-exchange-alt"></i> IST</div>
                    <div class="route-airline"><i class="fas fa-plane"></i> Turkish Airlines</div>
                    <div class="route-price">Rs. 145,000 <span>/ Return</span></div>
                </div>
            </div>

            <!-- Route 3 -->
            <div class="route-card route-3">
                <img loading="lazy" src="images/umrah.jpg" alt="Jeddah" class="route-image">
                <div class="route-info">
                    <div class="route-title">KHI <i class="fas fa-exchange-alt"></i> JED</div>
                    <div class="route-airline"><i class="fas fa-plane"></i> Saudia Airlines</div>
                    <div class="route-price">Rs. 120,000 <span>/ Return</span></div>
                </div>
            </div>

            <!-- Route 4 -->
            <div class="route-card route-4">
                <img loading="lazy" src="https://images.unsplash.com/photo-1513407030348-c983a97b98d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Tokyo" class="route-image">
                <div class="route-info">
                    <div class="route-title">LHE <i class="fas fa-exchange-alt"></i> NRT</div>
                    <div class="route-airline"><i class="fas fa-plane"></i> Qatar Airways</div>
                    <div class="route-price">Rs. 295,000 <span>/ Return</span></div>
                </div>
            </div>
            
            <!-- Route 5 -->
            <div class="route-card route-5">
                <img loading="lazy" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="London" class="route-image">
                <div class="route-info">
                    <div class="route-title">ISB <i class="fas fa-exchange-alt"></i> LHR</div>
                    <div class="route-airline"><i class="fas fa-plane"></i> British Airways</div>
                    <div class="route-price">Rs. 250,000 <span>/ Return</span></div>
                </div>
            </div>
            
            <!-- Route 6 -->
            <div class="route-card route-6">
                <img loading="lazy" src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="New York" class="route-image">
                <div class="route-info">
                    <div class="route-title">LHE <i class="fas fa-exchange-alt"></i> JFK</div>
                    <div class="route-airline"><i class="fas fa-plane"></i> Emirates</div>
                    <div class="route-price">Rs. 380,000 <span>/ Return</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-grid">
            <div class="feat-card">
                <div class="feature-icon"><i class="fas fa-tags"></i></div>
                <h3>Best Price Guarantee</h3>
                <p>Our direct API integrations with global airlines ensure you always get the most competitive and transparent fares instantly.</p>
            </div>
            <div class="feat-card">
                <div class="feature-icon" style="background: rgba(155, 89, 182, 0.1); color: #9b59b6;"><i class="fas fa-headset"></i></div>
                <h3>24/7 Priority Support</h3>
                <p>Flight changes or cancellations? Our dedicated travel agents are available around the clock to assist you with any modifications.</p>
            </div>
            <div class="feat-card">
                <div class="feature-icon" style="background: rgba(46, 204, 113, 0.1); color: #2ecc71;"><i class="fas fa-shield-alt"></i></div>
                <h3>100% Secure Booking</h3>
                <p>Your data and payments are protected with state-of-the-art encryption, ensuring a completely secure transaction every time.</p>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="flights-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Need a Custom Itinerary?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Our travel consultants can help you design complex multi-city routes, group bookings, or corporate travel plans.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Contact Ticketing Team</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\flights.php', $flights_content);
echo "flights.php perfectly created with API Search interface!";
?>
