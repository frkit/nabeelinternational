<?php
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$new_css = <<<CSS

        /* Destinations Section */
        .destinations-section {
            padding: 80px 5%;
            background-color: #fff;
            text-align: center;
        }

        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .destination-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            cursor: pointer;
        }

        .destination-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .destination-card:hover img {
            transform: scale(1.1);
        }

        .dest-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: #fff;
            padding: 40px 20px 20px;
            text-align: left;
        }

        .dest-info h3 {
            font-size: 1.6rem;
            margin-bottom: 5px;
            font-family: var(--font-heading);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-color), #18489e);
            color: #fff;
            padding: 80px 5%;
            text-align: center;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .cta-content h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            font-family: var(--font-heading);
        }

        .cta-content p {
            font-size: 1.15rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
CSS;

$css .= $new_css;
file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);
?>
