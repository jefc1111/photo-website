<?php

$cloudfront_address = 'https://d2j684ot9o9qkj.cloudfront.net/photos';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Geoff Clayton's photography</title>
</head>
    <body>
        <div>
            <a href="/">< Home</a>
        </div>
        <div>
            <img class="photo-1600" src="<?= $cloudfront_address.'/1600/'.$_GET['file'].'.jpg' ?>" />
        </div>                
    </body>
</html>
