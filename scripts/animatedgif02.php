<?php
/* title: Animated Gifs from a directory */
/* description: Generates an animated gif from files following a directory pattern. <br/>
<strong>This feature is not supported by GDResource.</strong> */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;
header("Content-type: image/gif");

$imanee = Imanee::globAnimate(__DIR__ . '/../resources/*.png');

echo $imanee->output();
