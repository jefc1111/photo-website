<?php

$photo_filenames = [    
    '53942932277',
    '53944241660',
    '53944241790',
    '53944281360',
    '53944627791',
    '13820167023',
    '5565968062'
];

$cloudfront_address = 'https://d2j684ot9o9qkj.cloudfront.net/photos';

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Geoff Clayton Photography</title>
        <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">

        <?php foreach ($photo_filenames as $photo_filename) { ?>
        <link rel='prefetch' href='<?= $cloudfront_address ?>/1600/<?= $photo_filename ?>.jpg' />
        <?php } ?>
        <script defer data-domain="photography.geoffclayton.com" src="https://stats.geoffclayton.com/js/plausible.js"></script>
    </head>
    <body>
        <?php if ($how_title) { ?>
        <header>
            <h1>Geoff Clayton Photography</h1>
        </header>
        <?php } ?>
        <?= require_once("views/$body_content.php") ?>
        <footer class="footer">
            <p>&copy; <?= date("Y") ?> Geoff Clayton. All rights reserved. The images displayed on this website are protected by copyright law. Unauthorized use, reproduction, or distribution of these images, without prior written consent, is strictly prohibited.</p>
            More info and contact details at <a href="https://geoffclayton.com">geoffclayton.com</a>
        </footer>
    </body>
</html>
