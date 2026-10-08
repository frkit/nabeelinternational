<?php
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

// Just in case any broken fragments remain
$css = preg_replace('/\.about-image-grid-4 \{.*?\.exp-text \{.*?\}/s', '', $css);

$css_new = <<<CSS

        /* FIXED ABOUT SECTION */
        .about-section {
            padding: 100px 5%;
            background-color: #f4f6f9; /* changed background color to a nice light grey-blue */
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: center;
        }

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
            border-radius: 12px;
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
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border: 8px solid #f4f6f9;
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

        .section-tag {
            color: var(--secondary-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .about-lead {
            font-size: 1.25rem;
            color: #333;
            font-weight: 600;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .about-desc {
            color: #666;
            line-height: 1.7;
            margin-bottom: 40px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .feature-box {
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: rgba(189, 178, 255, 0.2);
            color: var(--primary-color);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .feature-box:hover .feature-icon {
            background: var(--primary-color);
            color: #fff;
            transform: translateY(-5px);
        }

        .feature-box h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--primary-color);
        }

        .feature-box p {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
            margin: 0;
        }
        
        @media (max-width: 992px) {
            .about-grid { grid-template-columns: 1fr; }
            .about-image-grid-4 { max-width: 500px; margin: 0 auto 40px; }
            .features-grid { grid-template-columns: 1fr; }
        }
CSS;

$css .= $css_new;
file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);
echo "Fixed CSS!";
?>
