<?php
$page_title = 'Travel Vlog - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Premium Vlog Page Styles */
    body {
        background-color: #0b1120; /* Dark premium background for video content */
    }
    
    .vlog-hero {
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(220, 38, 38, 0.8) 100%), url('https://images.unsplash.com/photo-1518314916381-77a37c2a49ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 160px 5% 100px;
        text-align: center;
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    
    .vlog-hero::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(0,0,0,0.1) 0%, transparent 70%);
        top: -50px;
        left: -50px;
        border-radius: 50%;
        z-index: 1;
        animation: pulse 4s infinite alternate;
    }
    
    @keyframes pulse {
        0% { transform: scale(1); opacity: 0.5; }
        100% { transform: scale(1.2); opacity: 1; }
    }

    .vlog-hero h1 {
        font-family: var(--font-heading);
        font-size: 4.5rem;
        margin-bottom: 20px;
        font-weight: 800;
        position: relative;
        z-index: 2;
        background: linear-gradient(to right, #fff, #fca5a5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .vlog-hero p {
        font-size: 1.3rem;
        font-weight: 300;
        max-width: 750px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        color: #e2e8f0;
    }

    /* Featured Video Section */
    .featured-vlog {
        padding: 80px 5%;
        background-color: #0b1120;
        position: relative;
    }

    .featured-container {
        max-width: 1200px;
        margin: 0 auto;
        background: rgba(30, 41, 59, 0.5);
        border-radius: 12px;
        padding: 30px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 30px 60px rgba(0,0,0,0.5);
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
        align-items: center;
    }
    
    @media (max-width: 900px) {
        .featured-container { grid-template-columns: 1fr; }
    }
    
    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 ratio */
        height: 0;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.15);
    }
    
    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
    
    .featured-info h2 {
        font-family: var(--font-heading);
        font-size: 2.2rem;
        color: #fff;
        margin-bottom: 15px;
    }
    
    .featured-info .badge {
        display: inline-block;
        padding: 5px 15px;
        background: #d4af37;
        color: #fff;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }
    
    .featured-info p {
        color: #94a3b8;
        line-height: 1.7;
        margin-bottom: 25px;
    }
    
    .btn-watch {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #fff;
        color: #0b1120;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .btn-watch:hover {
        background: #d4af37;
        color: #fff;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    /* Grid Section */
    .vlog-grid-section {
        padding: 60px 5% 100px;
        background-color: #0f172a;
    }
    
    .section-title {
        font-family: var(--font-heading);
        font-size: 2.5rem;
        color: #fff;
        text-align: center;
        margin-bottom: 50px;
    }

    .vlog-grid {
        max-width: 1300px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    .vlog-card {
        background: #1e293b;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.4s ease;
        border: 1px solid rgba(255,255,255,0.05);
    }
    
    .vlog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        border-color: rgba(0,0,0,0.1);
    }

    .thumbnail {
        position: relative;
        width: 100%;
        height: 220px;
        background-size: cover;
        background-position: center;
    }
    
    .thumbnail::after {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0,0,0,0.3);
        transition: background 0.3s;
    }
    
    .vlog-card:hover .thumbnail::after {
        background: rgba(0,0,0,0.1);
    }
    
    .play-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background: rgba(15, 41, 77, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.5rem;
        z-index: 2;
        transition: all 0.3s ease;
    }
    
    .vlog-card:hover .play-icon {
        transform: translate(-50%, -50%) scale(1.1);
    }

    .duration {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background: rgba(0,0,0,0.8);
        color: #fff;
        padding: 4px 10px;
        border-radius: 10px;
        font-size: 0.8rem;
        font-weight: 700;
        z-index: 2;
    }

    .vlog-details {
        padding: 25px;
    }

    .vlog-details h3 {
        font-family: var(--font-heading);
        font-size: 1.3rem;
        color: #f8fafc;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .vlog-meta {
        display: flex;
        justify-content: space-between;
        color: #64748b;
        font-size: 0.9rem;
    }

    /* Vibrant CTA Section */
    .vlog-cta {
        background: linear-gradient(135deg, #0f294d 0%, #1e3a8a 100%);
        padding: 100px 5%;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .vlog-cta::before {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        top: -150px;
        left: -150px;
        border-radius: 50%;
    }
</style>

    <!-- Vibrant Page Header -->
    <div class="vlog-hero">
        <h1>Nabeel Travel Vlog</h1>
        <p>Experience the world before you pack your bags. Watch our cinematic travel guides, client reviews, and destination highlights.</p>
    </div>

    <!-- Featured Vlog -->
    <section class="featured-vlog">
        <div class="featured-container">
            <div class="video-wrapper">
                <!-- Using a travel video embed -->
                <iframe loading="lazy" src="https://www.youtube.com/embed/tgbNymZ7vqY?modestbranding=1&rel=0" allowfullscreen></iframe>
            </div>
            <div class="featured-info">
                <span class="badge">LATEST EPISODE</span>
                <h2>Exploring the Swiss Alps in 4K</h2>
                <p>Join us as we take our latest group tour through the breathtaking landscapes of Switzerland. From the Glacier Express to the peaks of Zermatt, witness why this is our most requested European package.</p>
                <a href="#" class="btn-watch"><i class="fab fa-youtube"></i> Subscribe on YouTube</a>
            </div>
        </div>
    </section>

    <!-- Vlog Grid Section -->
    <section class="vlog-grid-section">
        <h2 class="section-title">More Travel Vlogs</h2>
        <div class="vlog-grid">
            
            <!-- Card 1 -->
            <div class="vlog-card">
                <div class="thumbnail" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                    <div class="play-icon"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <span class="duration">12:45</span>
                </div>
                <div class="vlog-details">
                    <h3>Dubai Luxury Safari: What to Expect!</h3>
                    <div class="vlog-meta">
                        <span><i class="far fa-eye"></i> 15K views</span>
                        <span>2 weeks ago</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="vlog-card">
                <div class="thumbnail" style="background-image: url('https://images.unsplash.com/photo-1601633532729-23c21350ec6a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                    <div class="play-icon"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <span class="duration">08:20</span>
                </div>
                <div class="vlog-details">
                    <h3>Hunza Valley Autumn Tour Highlights</h3>
                    <div class="vlog-meta">
                        <span><i class="far fa-eye"></i> 8.2K views</span>
                        <span>1 month ago</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="vlog-card">
                <div class="thumbnail" style="background-image: url('images/umrah.jpg');">
                    <div class="play-icon"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <span class="duration">15:10</span>
                </div>
                <div class="vlog-details">
                    <h3>VIP Umrah Package 2026 Walkthrough</h3>
                    <div class="vlog-meta">
                        <span><i class="far fa-eye"></i> 22K views</span>
                        <span>3 months ago</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="vlog-card">
                <div class="thumbnail" style="background-image: url('https://images.unsplash.com/photo-1594916892648-5c4f24c3a633?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                    <div class="play-icon"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <span class="duration">10:05</span>
                </div>
                <div class="vlog-details">
                    <h3>Skardu & Deosai Plains - Group Tour</h3>
                    <div class="vlog-meta">
                        <span><i class="far fa-eye"></i> 6.5K views</span>
                        <span>4 months ago</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="vlog-card">
                <div class="thumbnail" style="background-image: url('https://images.unsplash.com/photo-1590483864070-5ce508b5f3a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                    <div class="play-icon"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <span class="duration">09:30</span>
                </div>
                <div class="vlog-details">
                    <h3>Trekking to Fairy Meadows (Full Guide)</h3>
                    <div class="vlog-meta">
                        <span><i class="far fa-eye"></i> 11K views</span>
                        <span>5 months ago</span>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="vlog-card">
                <div class="thumbnail" style="background-image: url('https://images.unsplash.com/photo-1616422285623-1498fa75e5fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                    <div class="play-icon"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <span class="duration">14:15</span>
                </div>
                <div class="vlog-details">
                    <h3>Client Testimonials - Swat Valley Trip</h3>
                    <div class="vlog-meta">
                        <span><i class="far fa-eye"></i> 4.3K views</span>
                        <span>6 months ago</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="vlog-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Never Miss a Journey</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #fca5a5; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Subscribe to our YouTube channel to get notified whenever we post a new cinematic travel guide or package review.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="#" style="background: #fff; color: #dc2626; padding: 15px 40px; border-radius: 8px; font-weight: 700; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.2); text-decoration:none;"><i class="fab fa-youtube"></i> Subscribe Now</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>