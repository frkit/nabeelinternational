<?php
$media_content = <<<HTML
<?php
\$page_title = 'Media Gallery - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Ultra-Premium Media Page Styles */
    
    body {
        background-color: #f8fbff; /* Very soft cool background */
    }
    
    .media-hero {
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(56, 189, 248, 0.8) 100%), url('https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 160px 5% 120px;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    
    /* Decorative floating elements in hero */
    .media-hero::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(236,72,153,0.4) 0%, transparent 70%);
        top: -50px;
        left: -50px;
        border-radius: 50%;
        z-index: 1;
        animation: float 6s ease-in-out infinite;
    }
    
    .media-hero::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(59,130,246,0.4) 0%, transparent 70%);
        bottom: -100px;
        right: -50px;
        border-radius: 50%;
        z-index: 1;
        animation: float 8s ease-in-out infinite reverse;
    }
    
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }

    .media-hero h1 {
        font-family: var(--font-heading);
        font-size: 4.5rem;
        margin-bottom: 20px;
        font-weight: 800;
        position: relative;
        z-index: 2;
        background: linear-gradient(to right, #fff, #e0e7ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .media-hero p {
        font-size: 1.4rem;
        font-weight: 300;
        max-width: 750px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        color: #e2e8f0;
    }

    /* Feeds Section */
    .feeds-section {
        padding: 80px 5% 120px;
        position: relative;
        z-index: 3;
        margin-top: -60px; /* Pulls content up over the hero slightly */
    }

    /* Premium Filter Buttons */
    .filter-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 60px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(20px);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border: 1px solid rgba(255,255,255,0.5);
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .filter-btn {
        padding: 12px 30px;
        background: transparent;
        border: 2px solid transparent;
        border-radius: 8px;
        font-family: var(--font-main);
        font-weight: 700;
        font-size: 1rem;
        color: #64748b;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .filter-btn i {
        font-size: 1.2rem;
    }
    
    .filter-btn:hover {
        background: #f1f5f9;
        color: #0f172a;
    }
    
    /* Social Colors on Hover & Active */
    .btn-all.active { background: #0f172a; color: #fff; box-shadow: 0 10px 20px rgba(15, 23, 42, 0.2); }
    .btn-fb.active { background: #1877F2; color: #fff; box-shadow: 0 10px 20px rgba(24, 119, 242, 0.3); border-color:#1877F2; }
    .btn-tt.active { background: linear-gradient(45deg, #000, #25f4ee, #fe2c55); color: #fff; box-shadow: 0 10px 20px rgba(254, 44, 85, 0.3); border-color:transparent; }
    .btn-in.active { background: #0A66C2; color: #fff; box-shadow: 0 10px 20px rgba(10, 102, 194, 0.3); border-color:#0A66C2; }
    .btn-yt.active { background: #FF0000; color: #fff; box-shadow: 0 10px 20px rgba(255, 0, 0, 0.3); border-color:#FF0000; }

    /* Masonry Grid for Social Embeds */
    .social-grid {
        max-width: 1400px;
        margin: 0 auto;
        columns: 3;
        column-gap: 40px;
    }

    @media (max-width: 1100px) {
        .social-grid { columns: 2; }
    }
    
    @media (max-width: 768px) {
        .social-grid { columns: 1; }
    }

    /* Premium Social Item Cards */
    .social-item {
        break-inside: avoid;
        margin-bottom: 40px;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(226, 232, 240, 0.8);
        position: relative;
    }
    
    .social-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 30px 60px rgba(0,0,0,0.12);
    }

    /* Top Social Strip */
    .social-strip {
        height: 6px;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
    }
    .strip-fb { background: #1877F2; }
    .strip-in { background: #0A66C2; }
    .strip-yt { background: #FF0000; }
    .strip-tt { background: linear-gradient(90deg, #25f4ee, #fe2c55); }

    /* Facebook & LinkedIn Card Styling */
    .post-header {
        padding: 25px 25px 15px;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .post-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .post-meta h4 {
        margin: 0;
        font-family: var(--font-heading);
        font-size: 1.1rem;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .post-meta .verified { color: #1877F2; font-size: 0.9rem; }
    
    .post-meta p {
        margin: 2px 0 0;
        font-size: 0.85rem;
        color: #64748b;
    }
    
    .post-text {
        padding: 0 25px 20px;
        font-size: 1rem;
        color: #334155;
        line-height: 1.6;
    }
    
    .post-image {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        display: block;
    }
    
    .post-footer {
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        border-top: 1px solid #f1f5f9;
        color: #64748b;
        font-weight: 600;
        font-size: 0.9rem;
    }
    
    .social-icon-corner {
        position: absolute;
        top: 25px;
        right: 25px;
        font-size: 1.5rem;
        opacity: 0.2;
        transition: opacity 0.3s;
    }
    
    .social-item:hover .social-icon-corner {
        opacity: 1;
    }
    
    .icon-fb { color: #1877F2; }
    .icon-in { color: #0A66C2; }

    /* Premium TikTok UI */
    .tiktok-ui {
        position: relative;
        width: 100%;
        padding-top: 150%; /* Taller ratio for mobile video */
        background-color: #000;
        border-radius: 12px;
        overflow: hidden;
    }
    
    .tiktok-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: center;
        background-size: cover;
        opacity: 0.85;
        transition: opacity 0.5s, transform 5s linear;
    }
    
    .social-item:hover .tiktok-bg {
        opacity: 0.6;
        transform: scale(1.05);
    }
    
    .tiktok-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 40px 20px 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        color: #fff;
    }
    
    .tiktok-overlay h3 {
        font-family: var(--font-main);
        font-size: 1.1rem;
        margin: 0 0 8px;
        font-weight: 700;
    }
    
    .tiktok-overlay p {
        font-size: 0.9rem;
        margin: 0;
        color: rgba(255,255,255,0.8);
    }
    
    .tiktok-logo {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 1.8rem;
        color: #fff;
        filter: drop-shadow(0 2px 5px rgba(0,0,0,0.5));
    }
    
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.5);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .play-btn:hover {
        background: rgba(255,255,255,0.4);
        transform: translate(-50%, -50%) scale(1.1);
    }

    /* YouTube Card */
    .youtube-card {
        padding: 0;
    }
    
    .yt-video-wrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        height: 0;
        overflow: hidden;
    }
    
    .yt-video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
    
    .yt-details {
        padding: 20px;
    }
    
    .yt-details h4 {
        font-family: var(--font-heading);
        font-size: 1.2rem;
        margin: 0 0 10px;
        color: #0f172a;
    }

    /* Vibrant CTA Section */
    .media-cta {
        background: linear-gradient(135deg, #0f294d 0%, #0b1d36 100%);
        padding: 100px 5%;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .media-cta::before {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(56, 189, 248, 0.15) 0%, transparent 70%);
        top: -250px;
        left: -250px;
        z-index: 1;
    }
    
    .media-cta::after {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 70%);
        bottom: -250px;
        right: -250px;
        z-index: 1;
    }
</style>

    <!-- Vibrant Page Header -->
    <div class="media-hero">
        <h1>Discover the World With Us</h1>
        <p>Explore our visual journey. Watch incredible tour highlights, client testimonials, and stay updated with our latest offers across all platforms.</p>
    </div>

    <!-- Feeds Section -->
    <section class="feeds-section">
        
        <!-- Filters -->
        <div class="filter-container">
            <button class="filter-btn btn-all active" onclick="filterGallery('all')"><i class="fas fa-border-all"></i> All Stories</button>
            <button class="filter-btn btn-tt" onclick="filterGallery('tiktok')"><i class="fab fa-tiktok"></i> TikTok</button>
            <button class="filter-btn btn-fb" onclick="filterGallery('facebook')"><i class="fab fa-facebook-f"></i> Facebook</button>
            <button class="filter-btn btn-in" onclick="filterGallery('linkedin')"><i class="fab fa-linkedin-in"></i> LinkedIn</button>
            <button class="filter-btn btn-yt" onclick="filterGallery('youtube')"><i class="fab fa-youtube"></i> YouTube</button>
        </div>
        
        <!-- Social Grid -->
        <div class="social-grid">
            
            <!-- YouTube Premium Item -->
            <div class="social-item filter-youtube youtube-card">
                <div class="social-strip strip-yt"></div>
                <div class="yt-video-wrapper">
                    <iframe loading="lazy" src="https://www.youtube.com/embed/tgbNymZ7vqY?modestbranding=1&rel=0" allowfullscreen></iframe>
                </div>
                <div class="yt-details">
                    <h4>Top 10 Places to Visit in Europe - 2026</h4>
                    <p style="color:#64748b; font-size:0.9rem; margin:0;"><i class="fab fa-youtube" style="color:#FF0000;"></i> Nabeel International • 15K views</p>
                </div>
            </div>

            <!-- TikTok Premium Item 1 -->
            <div class="social-item filter-tiktok" style="padding:0; border:none; background:transparent;">
                <div class="social-strip strip-tt"></div>
                <div class="tiktok-ui">
                    <div class="tiktok-bg" style="background-image: url('https://images.unsplash.com/photo-1522878345758-7e3e9a4f40f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                    <i class="fab fa-tiktok tiktok-logo"></i>
                    <div class="play-btn"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <div class="tiktok-overlay">
                        <h3>📍 Attabad Lake, Hunza</h3>
                        <p>The beauty of Northern Pakistan is simply unmatched! 🇵🇰✨ #Hunza #PakistanTravel #NabeelTours</p>
                    </div>
                </div>
            </div>
            
            <!-- Facebook Premium Item -->
            <div class="social-item filter-facebook">
                <div class="social-strip strip-fb"></div>
                <i class="fab fa-facebook social-icon-corner icon-fb"></i>
                <div class="post-header">
                    <img loading="lazy" src="logo.jpg" class="post-avatar">
                    <div class="post-meta">
                        <h4>Nabeel International <i class="fas fa-check-circle verified"></i></h4>
                        <p>3 hours ago • 🌍</p>
                    </div>
                </div>
                <div class="post-text">
                    We are thrilled to announce our new <strong>VIP Executive Umrah Packages for 2026!</strong> Book now and experience unparalleled luxury, staying in 5-star hotels right in front of the Haram. 🕋✨<br><br>👉 Swipe to see the accommodations and visit our website for booking details!
                </div>
                <img loading="lazy" src="images/umrah.jpg" class="post-image">
                <div class="post-footer">
                    <span><i class="fas fa-thumbs-up" style="color:#1877F2;"></i> 842</span>
                    <span>45 Comments • 12 Shares</span>
                </div>
            </div>
            
            <!-- LinkedIn Premium Item -->
            <div class="social-item filter-linkedin">
                <div class="social-strip strip-in"></div>
                <i class="fab fa-linkedin social-icon-corner icon-in"></i>
                <div class="post-header">
                    <img loading="lazy" src="logo.jpg" class="post-avatar" style="border-radius:10px;">
                    <div class="post-meta">
                        <h4>Nabeel Tours (Pvt. Ltd.)</h4>
                        <p>12,450 followers<br>1d • Edited • 🌐</p>
                    </div>
                </div>
                <div class="post-text">
                    Does your company struggle with managing complex business travel itineraries and expense reporting? ✈️💼<br><br>At Nabeel International, we provide dedicated corporate account managers who handle everything from VIP seating and hotel contracting to comprehensive financial reporting. <strong>Reduce your corporate travel spend by 20% this year.</strong><br><br><span style="color:#0A66C2;">#B2BTravel #CorporateTravel #BusinessSolutions #Leadership</span>
                </div>
                <img loading="lazy" src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="post-image">
                <div class="post-footer">
                    <span><i class="fas fa-thumbs-up" style="color:#0A66C2;"></i> <i class="fas fa-heart" style="color:#e74c3c; margin-left:-5px;"></i> 312</span>
                    <span>28 Comments</span>
                </div>
            </div>

            <!-- YouTube Premium Item 2 -->
            <div class="social-item filter-youtube youtube-card">
                <div class="social-strip strip-yt"></div>
                <div class="yt-video-wrapper">
                    <iframe loading="lazy" src="https://www.youtube.com/embed/zpOULjyy-n8?modestbranding=1&rel=0" allowfullscreen></iframe>
                </div>
                <div class="yt-details">
                    <h4>Dubai Luxury Desert Safari Experience</h4>
                    <p style="color:#64748b; font-size:0.9rem; margin:0;"><i class="fab fa-youtube" style="color:#FF0000;"></i> Nabeel International • 8.2K views</p>
                </div>
            </div>

            <!-- TikTok Premium Item 2 -->
            <div class="social-item filter-tiktok" style="padding:0; border:none; background:transparent;">
                <div class="social-strip strip-tt"></div>
                <div class="tiktok-ui">
                    <div class="tiktok-bg" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                    <i class="fab fa-tiktok tiktok-logo"></i>
                    <div class="play-btn"><i class="fas fa-play" style="margin-left:5px;"></i></div>
                    <div class="tiktok-overlay">
                        <h3>🏙️ Dubai Hacks</h3>
                        <p>How to get the best views of Burj Khalifa without paying entry fees! 🤫 #Dubai #TravelHacks</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- JS for Filtering -->
    <script>
        function filterGallery(platform) {
            // Update active button
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            event.currentTarget.classList.add('active');

            // Filter items
            const items = document.querySelectorAll('.social-item');
            items.forEach(item => {
                if (platform === 'all') {
                    item.style.display = 'block';
                    // Trigger reflow for animation
                    item.style.animation = 'none';
                    item.offsetHeight; 
                    item.style.animation = 'fadeInUp 0.5s ease forwards';
                } else {
                    if (item.classList.contains('filter-' + platform)) {
                        item.style.display = 'block';
                        item.style.animation = 'none';
                        item.offsetHeight; 
                        item.style.animation = 'fadeInUp 0.5s ease forwards';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        }
    </script>
    
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <!-- Vibrant CTA Section -->
    <section class="media-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Join Our Travel Community</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #cbd5e1; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Follow us on social media for daily travel inspiration, exclusive flash deals, and important visa updates.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="#" style="background: #1877F2; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(24, 119, 242, 0.3); text-decoration:none;"><i class="fab fa-facebook-f" style="margin-right:8px;"></i> Follow on Facebook</a>
            <a href="#" style="background: linear-gradient(45deg, #000, #25f4ee, #fe2c55); color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(254, 44, 85, 0.3); text-decoration:none;"><i class="fab fa-tiktok" style="margin-right:8px;"></i> Follow on TikTok</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\media.php', $media_content);
echo "media.php redesigned to be ultra-premium!";
?>
