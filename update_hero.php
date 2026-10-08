<?php
// Update style.css
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$new_hero_css = <<<CSS
        /* Hero Slider */
        .hero-section {
            width: 100%;
            position: relative;
        }

        .hero-slide {
            padding: 120px 5%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            min-height: 85vh;
        }

        .hero-content-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            width: 100%;
        }

        .hero-text {
            color: #fff;
            max-width: 650px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s ease-out;
        }

        .swiper-slide-active .hero-text {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-text h2 {
            font-family: var(--font-heading);
            font-size: 3.8rem;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .hero-text p {
            font-size: 1.15rem;
            margin-bottom: 35px;
            color: #f8f9fa;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-small-images {
            display: flex;
            gap: 20px;
            opacity: 0;
            transform: translateX(50px);
            transition: all 1s ease-out;
            transition-delay: 0.3s;
        }

        .swiper-slide-active .hero-small-images {
            opacity: 1;
            transform: translateX(0);
        }

        .hero-small-images img {
            width: 180px;
            height: 260px;
            object-fit: cover;
            border-radius: 15px;
            border: 4px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            transition: transform 0.4s ease;
        }

        .hero-small-images img:nth-child(2) {
            transform: translateY(40px);
        }

        .hero-small-images img:hover {
            transform: scale(1.05) translateY(10px);
            border-color: var(--secondary-color);
        }

        .hero-pagination .swiper-pagination-bullet {
            background: #fff;
            opacity: 0.5;
            width: 12px;
            height: 12px;
        }
        .hero-pagination .swiper-pagination-bullet-active {
            opacity: 1;
            background: var(--secondary-color);
        }
        
        .hero-next, .hero-prev { color: #fff !important; }
        
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @media (max-width: 992px) {
            .hero-content-wrapper { flex-direction: column; text-align: center; }
            .hero-small-images { margin-top: 20px; justify-content: center; }
            .hero-small-images img { width: 140px; height: 180px; }
            .hero-text h2 { font-size: 2.5rem; }
        }
CSS;

// Remove the old .hero to .btn-primary { block
$css = preg_replace('/\/\* Hero Slider \*\/(.*?)\.btn-primary {/s', $new_hero_css . "\n\n        .btn-primary {", $css);
file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

// Also we need to add the hero-swiper JS init to footer.php if not already there
$footer = file_get_contents('f:\wamp64\www\nabeel\layout\footer.php');
if (strpos($footer, 'hero-swiper') === false) {
    $hero_js = <<<JS
            if (document.querySelector('.hero-swiper')) {
                new Swiper('.hero-swiper', {
                    slidesPerView: 1,
                    loop: true,
                    effect: 'fade',
                    autoplay: { delay: 5000, disableOnInteraction: false },
                    pagination: { el: '.hero-pagination', clickable: true },
                    navigation: { nextEl: '.hero-next', prevEl: '.hero-prev' },
                });
            }
JS;
    $footer = str_replace("new Swiper('.services-swiper'", $hero_js . "\n                new Swiper('.services-swiper'", $footer);
    file_put_contents('f:\wamp64\www\nabeel\layout\footer.php', $footer);
}

echo "Hero CSS and JS updated!";
?>
