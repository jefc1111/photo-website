<div class="main-container">
    <div class="thumbnails-grid-container">

        <?php foreach ($photos as $photo) { ?>            

        <a href="photo.php?file=<?= $photo['file'] ?>">
            <img 
                alt="<?= $photo['alt_text'] ?> (thumbnail)" 
                src="<?= $cloudfront_address ?>/thumbnail/<?= $photo['file'] ?>.jpg" 
            />
        </a>

        <?php } ?>
    </div>
</div>