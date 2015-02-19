<?php

/**
 * places 2 different png images using exact positioning and resizing, with the method compositeImage
 */

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

$res_png1 = __DIR__ . '/../resources/cat01.png';
$res_png2 = __DIR__ . '/../resources/cat02.png';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->compositeImage($res_png1, 150, 150, 150, 150)
    ->compositeImage($res_png2, 300, 150, 100, 100);

echo generateBeforeAfter($before, $imanee)->output();
