<?php
// Update header
$header = file_get_contents('f:\wamp64\www\nabeel\layout\header.php');
if (strpos($header, 'swiper-bundle.min.css') === false) {
    $replacement = <<<HTML
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="layout/style.css">
HTML;
    $header = str_replace('<link rel="stylesheet" href="layout/style.css">', $replacement, $header);
    file_put_contents('f:\wamp64\www\nabeel\layout\header.php', $header);
}

// Update footer
$footer = file_get_contents('f:\wamp64\www\nabeel\layout\footer.php');
if (strpos($footer, 'swiper-bundle.min.js') === false) {
    $swiper_js = <<<JS
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (document.querySelector('.services-swiper')) {
                new Swiper('.services-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: { delay: 3500, disableOnInteraction: false },
                    pagination: { el: '.swiper-pagination', clickable: true },
                    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                    breakpoints: { 640: { slidesPerView: 2 }, 992: { slidesPerView: 3 }, 1200: { slidesPerView: 3 } }
                });
            }
        });
    </script>
JS;
    $footer = str_replace('<!-- Google Translate Integration -->', $swiper_js . "\n\n    <!-- Google Translate Integration -->", $footer);
    file_put_contents('f:\wamp64\www\nabeel\layout\footer.php', $footer);
}

// Update style.css
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');
if (strpos($css, '.services-swiper') === false) {
    $swiper_css = <<<CSS
        .services-swiper {
            padding: 20px 10px 60px 10px;
        }
        
        .services-swiper .swiper-button-next,
        .services-swiper .swiper-button-prev {
            color: var(--primary-color);
            background: #fff;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .services-swiper .swiper-button-next:after,
        .services-swiper .swiper-button-prev:after {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .services-swiper .swiper-pagination-bullet-active {
            background: var(--primary-color);
        }
        
        .card { height: 100%; }
        
CSS;
    $css = str_replace('.cards-grid {', $swiper_css . "\n        .cards-grid {", $css);
    $css = preg_replace('/\.cards-grid\s*{[^}]*}/s', '', $css);
    file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);
}

// Update index.php
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');
$start = strpos($index, '<div class="cards-grid">');
$end = strpos($index, '</section>', $start);

if ($start !== false && $end !== false) {
    $grid_html = substr($index, $start, $end - $start);
    $grid_html = str_replace('<div class="cards-grid">', '', $grid_html);
    $grid_html = preg_replace('/<\/div>\s*$/', '', $grid_html);
    
    $grid_html = str_replace('<div class="card">', '<div class="swiper-slide">'."\n".'                    <div class="card">', $grid_html);
    $grid_html = str_replace("                </div>\n            </div>", "                </div>\n            </div>\n                </div><!-- end swiper-slide -->", $grid_html);
    
    $new_html = <<<HTML
        <!-- Swiper Container -->
        <div class="swiper services-swiper" style="overflow: hidden; position: relative;">
            <div class="swiper-wrapper">
$grid_html
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    
HTML;
    $index = substr_replace($index, $new_html, $start, $end - $start);
    file_put_contents('f:\wamp64\www\nabeel\index.php', $index);
}
echo "Swiper added!";
?>
