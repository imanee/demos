<?php
/* title: Resizing precisely */
/* description: Resizes an image to the exact provided dimensions (doesn't care about proportion) */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");
$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');

echo $imanee->resize(300, 300, false)
    ->output();
