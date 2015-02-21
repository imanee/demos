<?php
/* title: Writing text with absolute positioning */
/* description: Using coordinates place text on an image */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");
$imanee = new Imanee($res_jpg);

echo $imanee->annotate('testing Imanee', 20, 50, 40)
        ->output();
