<?php
/* title: Resize to Fit */
/* description: Resizes an image to fit in the provided dimensions, keeping proportion */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");
$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');

echo $imanee->resize(300, 300)
    ->output();
