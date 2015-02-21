<?php
/* title: Creating a collage */
/* description: Placing images on top of another image, using relative positioning */
include __DIR__ . '/../vendor/autoload.php';

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

$res_png1 = __DIR__ . '/../resources/cat01.png';
$res_png2 = __DIR__ . '/../resources/cat02.png';
$res_png3 = __DIR__ . '/../resources/cat03.png';
$res_png4 = __DIR__ . '/../resources/cat04.png';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);

$imanee
    ->placeImage($res_png1, Imanee::IM_POS_TOP_LEFT)
    ->placeImage($res_png2, Imanee::IM_POS_TOP_RIGHT)
    ->placeImage($res_png3, Imanee::IM_POS_BOTTOM_LEFT)
    ->placeImage($res_png4, Imanee::IM_POS_BOTTOM_RIGHT);

echo $imanee->output();