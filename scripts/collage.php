<?php

include __DIR__ . '/../vendor/autoload.php';

$res_jpg = __DIR__ . '/../resources/img01.jpg';

$res_png1 = __DIR__ . '/../resources/cat01.png';
$res_png2 = __DIR__ . '/../resources/cat02.png';
$res_png3 = __DIR__ . '/../resources/cat03.png';
$res_png4 = __DIR__ . '/../resources/cat04.png';

header("Content-type: image/jpg");

$imanee = new Imanee\Imanee($res_jpg);

/* places 4 different png images on the 4 corners of the original image (placeImage method)
and place one image on specific coordinates performing a resize (compositeImage method) */

echo $imanee->placeImage($res_png1, \Imanee\Imanee::IM_POS_TOP_LEFT)
            ->placeImage($res_png2, \Imanee\Imanee::IM_POS_TOP_RIGHT)
            ->placeImage($res_png3, \Imanee\Imanee::IM_POS_BOTTOM_LEFT)
            ->placeImage($res_png4, \Imanee\Imanee::IM_POS_BOTTOM_RIGHT)
            ->compositeImage($res_png2, 150, 150, 50, 50)
            ->output();