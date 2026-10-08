<?php
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_old = <<<CSS
        /* FIXED ABOUT SECTION */
        .about-section {
            padding: 100px 5%;
            background-color: #f4f6f9; /* changed background color to a nice light grey-blue */
        }
CSS;

$css_new = <<<CSS
        /* FIXED ABOUT SECTION */
        .about-section {
            padding: 100px 5%;
            background-color: var(--primary-color);
            color: #fff;
        }
        
        .about-section .section-title {
            color: #fff;
        }

        .about-section .section-tag {
            color: var(--secondary-color);
            background: rgba(255,255,255,0.1);
            padding: 5px 15px;
            border-radius: 12px;
            display: inline-block;
        }

        .about-section .about-lead {
            color: #fff;
        }

        .about-section .about-desc {
            color: rgba(255,255,255,0.8);
        }

        .about-section .feature-box h4 {
            color: #fff;
        }

        .about-section .feature-box p {
            color: rgba(255,255,255,0.8);
        }

        .about-section .feature-icon {
            background: rgba(255,255,255,0.1);
            color: #fff;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .about-section .feature-box:hover .feature-icon {
            background: #fff;
            color: var(--primary-color);
        }
CSS;

$css = str_replace($css_old, $css_new, $css);
file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

echo "About section background changed to blue!";
?>
