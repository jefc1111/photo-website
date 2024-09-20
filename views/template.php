<?php
         
$path = $_SERVER["SCRIPT_FILENAME"];

file_put_contents("php://stdout", "\nRequested: $path"); // Prints to the output in php -S server

$photos = [
    [
        'file' => '53942932277',
        'alt_text' => 'A bench in front of a bush on a hot day with the photographer reflected in a traffic mirror'
    ],
    [
        'file' => '53944241660',
        'alt_text' => 'A large rock covered in seaweed'
    ],
    [
        'file' => '53944241790',
        'alt_text' => 'A rusty circular object by a waterway (sepia)'
    ],
    [
        'file' => '53944281360',
        'alt_text' => 'A muddy field with a tractor and a farm house in the background'
    ],
    [
        'file' => '53944627791',
        'alt_text' => 'Frost damaged plants in front of a wall'
    ],
    [
        'file' => '13820167023',
        'alt_text' => 'A car park full of Dacia Logans from above (B&W)'
    ],
    [
        'file' => '5565968062',
        'alt_text' => 'A bush with yellow flowers in the foreground with Durdle Door in the background'
    ]
];

$cloudfront_address = 'https://d2j684ot9o9qkj.cloudfront.net/photos';

$get_photo_attr = fn(string $file, string $attr) => array_filter($photos, fn($p) => $p['file'] === $file)[$attr];

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Geoff Clayton Photography</title>
        <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
        <?php 
        if ($body_content === 'home') {
            foreach ($photos as $photo) {
                echo "<link rel='prefetch' href='<?= $cloudfront_address ?>/1600/<?= {$photo['file']} ?>.jpg' />";
            }            
        }
        ?>
        <script defer data-domain="photography.geoffclayton.com" src="https://stats.geoffclayton.com/js/plausible.js"></script>
    </head>
    <body>
        <?php if ($show_title) { ?>
        <header>
            <h1>Geoff Clayton Photography</h1>
        </header>
        <?php } ?>
        <body>
            <?= require_once("views/$body_content.php") ?>
        </body>
        <footer class="footer">
            <p>&copy; <?= date("Y") ?> Geoff Clayton. All rights reserved. The images displayed on this website are protected by copyright law. Unauthorized use, reproduction, or distribution of these images, without prior written consent, is strictly prohibited.</p>
            More info and contact details at <a href="https://geoffclayton.com">geoffclayton.com</a>
        </footer>
    </body>
</html>
