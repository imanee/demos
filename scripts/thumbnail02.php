<?php
/* title: Cropped Thumbnails */
/* description: Produces a cropped thumbnail with the exact provided dimensions. Great for creating square thumbs without user input. */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");
$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');

echo $imanee->thumbnail(200, 200, true)
    ->output();
