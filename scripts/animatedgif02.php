<?php
/* title: Animated Gifs from a directory */
/* description: Generates an animated gif from files following a directory pattern */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;
header("Content-type: image/gif");

echo Imanee::globAnimate(__DIR__ . '/../resources/*.png');
