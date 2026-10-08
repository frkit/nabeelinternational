<?php
// 1. Update header.php to link Media Gallery
$header = file_get_contents('f:\wamp64\www\nabeel\layout\header.php');
$header = str_replace('<a href="#"><i class="fas fa-photo-video"></i> Media Gallery</a>', '<a href="media.php"><i class="fas fa-photo-video"></i> Media Gallery</a>', $header);
file_put_contents('f:\wamp64\www\nabeel\layout\header.php', $header);

// 2. Create media.php with vibrant pattern and social embeds
$media_content = <<<HTML
<?php
\$page_title = 'Media Gallery - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Media Page Styles */
    .media-hero {
        background: linear-gradient(135deg, rgba(58, 134, 255, 0.85) 0%, rgba(189, 178, 255, 0.85) 100%), url('https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .media-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .media-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 700px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Social Feeds Section */
    .feeds-section {
        padding: 80px 5%;
        background-color: #fff;
    }

    .section-title-color {
        font-family: var(--font-heading);
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 20px;
        text-align: center;
    }
    
    .feed-subtitle {
        text-align: center;
        color: #666;
        margin-bottom: 60px;
        font-size: 1.1rem;
    }

    /* Filter Buttons */
    .filter-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 50px;
    }

    .filter-btn {
        padding: 12px 25px;
        background: #f4f6f9;
        border: none;
        border-radius: 30px;
        font-family: var(--font-main);
        font-weight: 600;
        font-size: 1rem;
        color: #555;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .filter-btn:hover, .filter-btn.active {
        background: var(--primary-color);
        color: #fff;
        box-shadow: 0 10px 20px rgba(58, 134, 255, 0.3);
    }
    
    /* Social Colors on Hover */
    .btn-fb:hover, .btn-fb.active { background: #1877F2; box-shadow: 0 10px 20px rgba(24, 119, 242, 0.3); }
    .btn-tt:hover, .btn-tt.active { background: #000000; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); }
    .btn-in:hover, .btn-in.active { background: #0A66C2; box-shadow: 0 10px 20px rgba(10, 102, 194, 0.3); }
    .btn-yt:hover, .btn-yt.active { background: #FF0000; box-shadow: 0 10px 20px rgba(255, 0, 0, 0.3); }

    /* Masonry Grid for Social Embeds */
    .social-grid {
        max-width: 1400px;
        margin: 0 auto;
        columns: 3;
        column-gap: 30px;
    }

    @media (max-width: 1100px) {
        .social-grid { columns: 2; }
    }
    
    @media (max-width: 768px) {
        .social-grid { columns: 1; }
    }

    .social-item {
        break-inside: avoid;
        margin-bottom: 30px;
        background: #fdfdfd;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0,0,0,0.04);
        transition: all 0.4s ease;
        border: 1px solid #eee;
    }
    
    .social-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .social-header {
        padding: 15px 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid #f0f0f0;
        font-weight: 600;
        color: #333;
    }

    .hdr-fb { color: #1877F2; }
    .hdr-tt { color: #000000; }
    .hdr-in { color: #0A66C2; }
    .hdr-yt { color: #FF0000; }

    .social-content {
        padding: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        background: #000;
    }
    
    /* Specific Embed Overrides to make them look nice */
    .social-content iframe, .social-content video {
        width: 100%;
        border: none;
        display: block;
    }
    
    .social-content.facebook {
        background: #fff;
        padding: 20px;
    }
    
    .social-content.linkedin {
        background: #fff;
    }

    /* Vibrant CTA Section */
    .media-cta {
        background: linear-gradient(135deg, #FFD6E0 0%, #BDB2FF 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .media-cta::before {
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
    
    .media-cta::after {
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
</style>

    <!-- Vibrant Page Header -->
    <div class="media-hero">
        <h1>Our Media Gallery</h1>
        <p>Stay connected with us across all platforms. Watch our latest tours, client testimonials, and company updates.</p>
    </div>

    <!-- Feeds Section -->
    <section class="feeds-section">
        <h2 class="section-title-color">Live Social Stream</h2>
        <p class="feed-subtitle">Filter our latest content by your favorite platform</p>
        
        <!-- Filters -->
        <div class="filter-container">
            <button class="filter-btn active" onclick="filterGallery('all')"><i class="fas fa-border-all"></i> All Posts</button>
            <button class="filter-btn btn-tt" onclick="filterGallery('tiktok')"><i class="fab fa-tiktok"></i> TikTok</button>
            <button class="filter-btn btn-fb" onclick="filterGallery('facebook')"><i class="fab fa-facebook-f"></i> Facebook</button>
            <button class="filter-btn btn-in" onclick="filterGallery('linkedin')"><i class="fab fa-linkedin-in"></i> LinkedIn</button>
            <button class="filter-btn btn-yt" onclick="filterGallery('youtube')"><i class="fab fa-youtube"></i> YouTube</button>
        </div>
        
        <!-- Social Grid -->
        <div class="social-grid">
            
            <!-- YouTube Item 1 -->
            <div class="social-item filter-youtube">
                <div class="social-header hdr-yt"><i class="fab fa-youtube"></i> Nabeel International on YouTube</div>
                <div class="social-content">
                    <!-- Standard YouTube Embed Placeholder (using a beautiful travel video) -->
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <!-- TikTok Item 1 -->
            <div class="social-item filter-tiktok">
                <div class="social-header hdr-tt"><i class="fab fa-tiktok"></i> @nabeeltravels</div>
                <div class="social-content" style="background:#fff;">
                    <!-- Simulating a TikTok embed perfectly with an image/overlay to prevent heavy script loading issues -->
                    <div style="position:relative; width:100%; padding-top:133%; background:url('https://images.unsplash.com/photo-1522878345758-7e3e9a4f40f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80') center/cover;">
                        <div style="position:absolute; bottom:20px; left:20px; color:#fff; text-shadow:0 2px 5px rgba(0,0,0,0.5);">
                            <h4 style="margin:0; font-family:var(--font-heading);">📍 Exploring Hunza</h4>
                            <p style="margin:5px 0 0; font-size:0.9rem;">#Travel #Pakistan #Hunza</p>
                        </div>
                        <i class="fas fa-play-circle" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:4rem; color:rgba(255,255,255,0.8);"></i>
                    </div>
                </div>
            </div>
            
            <!-- Facebook Item 1 -->
            <div class="social-item filter-facebook">
                <div class="social-header hdr-fb"><i class="fab fa-facebook"></i> Nabeel International</div>
                <div class="social-content facebook">
                    <!-- Simulated Facebook Post -->
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:15px;">
                        <img src="logo.jpg" style="width:40px; height:40px; border-radius:50%;">
                        <div>
                            <div style="font-weight:700; color:#1877F2; font-size:0.95rem;">Nabeel International</div>
                            <div style="color:#888; font-size:0.8rem;">2 hours ago • 🌍</div>
                        </div>
                    </div>
                    <p style="font-size:0.95rem; line-height:1.5; color:#333; margin-bottom:15px;">We are thrilled to announce our new VIP Executive Umrah packages for 2026! Book now and experience unparalleled luxury right in front of the Haram. 🕋✨<br><br>👉 Visit our website for details!</p>
                    <img src="images/umrah.jpg" style="width:100%; border-radius:10px;">
                    <div style="display:flex; justify-content:space-between; margin-top:15px; color:#666; font-size:0.9rem; padding-top:15px; border-top:1px solid #eee;">
                        <span><i class="far fa-thumbs-up"></i> 245</span>
                        <span>12 Comments • 8 Shares</span>
                    </div>
                </div>
            </div>
            
            <!-- LinkedIn Item 1 -->
            <div class="social-item filter-linkedin">
                <div class="social-header hdr-in"><i class="fab fa-linkedin"></i> Nabeel Tours (Pvt. Ltd.)</div>
                <div class="social-content linkedin" style="padding:20px;">
                    <!-- Simulated LinkedIn Post -->
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:15px;">
                        <img src="logo.jpg" style="width:50px; height:50px; border-radius:5px;">
                        <div>
                            <div style="font-weight:700; font-size:1rem; color:#000;">Nabeel International</div>
                            <div style="color:#666; font-size:0.85rem;">Premium Travel & Corporate Solutions</div>
                            <div style="color:#888; font-size:0.75rem;">1d • Edited • 🌐</div>
                        </div>
                    </div>
                    <p style="font-size:0.9rem; line-height:1.6; color:#000; margin-bottom:15px;">Does your company struggle with managing complex business travel itineraries and expense reporting?<br><br>At Nabeel International, we provide dedicated corporate account managers who handle everything from VIP seating to comprehensive financial reporting. Reduce your corporate travel spend by 20% this year.<br><br>#B2BTravel #CorporateTravel #BusinessSolutions</p>
                    <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" style="width:100%; border-radius:2px; margin-bottom:10px;">
                    <div style="display:flex; gap:20px; color:#666; font-weight:600; font-size:0.85rem; padding-top:10px; border-top:1px solid #eee;">
                        <span><i class="far fa-thumbs-up"></i> Like (112)</span>
                        <span><i class="far fa-comment"></i> Comment (8)</span>
                    </div>
                </div>
            </div>

            <!-- YouTube Item 2 -->
            <div class="social-item filter-youtube">
                <div class="social-header hdr-yt"><i class="fab fa-youtube"></i> Nabeel International on YouTube</div>
                <div class="social-content">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <!-- TikTok Item 2 -->
            <div class="social-item filter-tiktok">
                <div class="social-header hdr-tt"><i class="fab fa-tiktok"></i> @nabeeltravels</div>
                <div class="social-content" style="background:#fff;">
                    <div style="position:relative; width:100%; padding-top:133%; background:url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80') center/cover;">
                        <div style="position:absolute; bottom:20px; left:20px; color:#fff; text-shadow:0 2px 5px rgba(0,0,0,0.5);">
                            <h4 style="margin:0; font-family:var(--font-heading);">✈️ Dubai Views</h4>
                            <p style="margin:5px 0 0; font-size:0.9rem;">#Dubai #BurjKhalifa #TravelHacks</p>
                        </div>
                        <i class="fas fa-play-circle" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:4rem; color:rgba(255,255,255,0.8);"></i>
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
                } else {
                    if (item.classList.contains('filter-' + platform)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        }
    </script>

    <!-- Vibrant CTA Section -->
    <section class="media-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Join Our Community</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Follow us on social media for daily travel inspiration, exclusive flash deals, and important visa updates.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="#" style="background: #1877F2; color: #fff; padding: 15px 40px; border-radius: 30px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(24, 119, 242, 0.3);"><i class="fab fa-facebook-f"></i> Follow on Facebook</a>
            <a href="#" style="background: #000; color: #fff; padding: 15px 40px; border-radius: 30px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.3);"><i class="fab fa-tiktok"></i> Follow on TikTok</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\media.php', $media_content);
echo "media.php created and linked successfully!";
?>
