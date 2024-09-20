<div>
    <a class="home-link" href="/">< Home</a>
</div>
<div class="photo-1600-container">
    <img 
        alt="<?= $get_photo_attr($_GET['file'], 'alt_text') ?>" 
        class="photo-1600" 
        src="<?= $cloudfront_address.'/1600/'.$_GET['file'].'.jpg' ?>" 
    />
</div>     