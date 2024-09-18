<div class="main-container">
    <div class="thumbnails-grid-container">

        <?php 
        $path = $_SERVER["SCRIPT_FILENAME"];

        file_put_contents("php://stdout", "\nRequested: $path"); // Prints to the output in php -S server

        foreach ($photo_filenames as $photo_filename) {
            echo "

        <a href='photo.php?file=$photo_filename'>
            <img width='200' src='$cloudfront_address/thumbnail/$photo_filename.jpg' /><br />
        </a>

        ";
        } 
        ?>

    </div>
</div>