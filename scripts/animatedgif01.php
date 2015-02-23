<?php
/* title: Animated Gifs from an array */
/* description: Generates an animated gif from an array of images */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

$frames[] = __DIR__ . '/../resources/cat01.png';
$frames[] = __DIR__ . '/../resources/cat02.png';
$frames[] = __DIR__ . '/../resources/cat03.png';
$frames[] = __DIR__ . '/../resources/cat04.png';

header("Content-type: image/gif");

$imanee = Imanee::arrayAnimate($frames, 30);

echo $imanee->output();
