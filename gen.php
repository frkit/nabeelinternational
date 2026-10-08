<?php
$pages = [
    'flights.php' => ['title' => 'Flights', 'img' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'],
    'umrah.php' => ['title' => 'Umrah Packages', 'img' => 'https://images.unsplash.com/photo-1565552643983-6655b4150534?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'],
    'study.php' => ['title' => 'Study Abroad', 'img' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'],
    'visa.php' => ['title' => 'Visa Assistance', 'img' => 'https://images.unsplash.com/photo-1555848962-6e79363ec58f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'],
    'world-tours.php' => ['title' => 'World Tours', 'img' => 'https://images.unsplash.com/photo-1488085061387-422e29b40080?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'],
    'pakistan-tours.php' => ['title' => 'Pakistan Tours', 'img' => 'https://images.unsplash.com/photo-1588714477688-cefa0a52df03?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'],
    'about.php' => ['title' => 'About Us', 'img' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'],
    'contact.php' => ['title' => 'Contact Us', 'img' => 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80']
];

$template = file_get_contents('template.php');

foreach($pages as $file => $data) {
    $content = str_replace(['{{TITLE}}', '{{IMAGE_URL}}'], [$data['title'], $data['img']], $template);
    file_put_contents($file, $content);
}
echo "Pages generated successfully.\n";
?>
