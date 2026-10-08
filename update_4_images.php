<?php
// Update index.php
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');

$old_html = <<<HTML
            <div class="about-image-collage">
                <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Travel Experience" class="img-main">
                <img src="images/istanbul.jpg" alt="Destination" class="img-sub">
                <div class="experience-badge">
                    <span class="exp-years">15+</span>
                    <span class="exp-text">Years of<br>Experience</span>
                </div>
            </div>
HTML;

$new_html = <<<HTML
            <div class="about-image-grid-4">
                <div class="col-left">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Travel" class="img-1">
                    <img src="images/study.jpg" alt="Study" class="img-2">
                </div>
                <div class="col-right">
                    <img src="images/umrah.jpg" alt="Umrah" class="img-3">
                    <img src="images/istanbul.jpg" alt="Istanbul" class="img-4">
                </div>
                <div class="experience-badge">
                    <span class="exp-years">15+</span>
                    <span class="exp-text">Years</span>
                </div>
            </div>
HTML;

$index = str_replace($old_html, $new_html, $index);
file_put_contents('f:\wamp64\www\nabeel\index.php', $index);


// Update style.css
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_new = <<<CSS
        .about-image-grid-4 {
            display: flex;
            gap: 20px;
            position: relative;
        }

        .col-left, .col-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 50%;
        }

        .col-left {
            margin-top: 40px;
        }

        .about-image-grid-4 img {
            width: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .about-image-grid-4 img:hover {
            transform: scale(1.03);
        }

        .img-1 { height: 280px; }
        .img-2 { height: 200px; }
        .img-3 { height: 220px; }
        .img-4 { height: 260px; }

        .about-image-grid-4 .experience-badge {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--primary-color);
            color: #fff;
            padding: 20px;
            border-radius: 50%;
            text-align: center;
            box-shadow: 0 10px 25px rgba(26, 86, 219, 0.4);
            border: 8px solid #fcfcfc;
            width: 130px;
            height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .about-image-grid-4 .exp-years {
            font-size: 2rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 5px;
            display: block;
        }
        
        .about-image-grid-4 .exp-text {
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
CSS;

$css = preg_replace('/\.about-image-collage \{.*?\.features-grid \{/s', $css_new . "\n\n        .features-grid {", $css);

// Replace media query
$css = str_replace('.about-image-collage { height: 450px; width: 100%; max-width: 500px; margin: 0 auto 40px; }', '.about-image-grid-4 { max-width: 500px; margin: 0 auto 40px; }', $css);

file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);
echo "Added 4 images!";
?>
