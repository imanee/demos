<?php
/* title: Thumbnails to fit area */
/* description: Produces a proportional thumbnail using the provided dimensions as maximum values */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");
$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');

echo $imanee->thumbnail(300, 300)
    ->output();
