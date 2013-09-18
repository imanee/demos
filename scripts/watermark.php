<?php

include __DIR__ . '/../vendor/autoload.php';

$res_jpg = __DIR__ . '/../resources/img01.jpg';
$res_png = __DIR__ . '/../resources/cat01.png';

header("Content-type: image/jpg");

$imanee = new Imanee\Imanee($res_jpg);

/* places a watermark with transparency at the bottom right of the image. The last parameter is optional and defines the transparency in percentage (higher = more transparent)  */
echo $imanee->watermark($res_png, \Imanee\Imanee::IM_POS_BOTTOM_RIGHT, 30)
            ->output();