<?php

/**
 * creates an animated gif based on an array of images
 */

include "common.php";

use Imanee\Imanee;

$frames[] = __DIR__ . '/../resources/cat01.png';
$frames[] = __DIR__ . '/../resources/cat02.png';
$frames[] = __DIR__ . '/../resources/cat03.png';
$frames[] = __DIR__ . '/../resources/cat04.png';

header("Content-type: image/gif");

echo Imanee::arrayAnimate($frames, 30);
