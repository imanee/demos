<?php

/**
 * creates a color changing text gif
 */

include "common.php";

use Imanee\Imanee;
use Imanee\Drawer;

header("Content-type: image/gif");

$text = "Imanee!";
$font = __DIR__ . '/../resources/fonts/moderna.ttf';
$colors = ['green', 'red', 'yellow', 'blue'];

$base = new Imanee();
$drawer = new Drawer();

$drawer->setFont($font)
    ->setFontSize(40);

foreach ($colors as $color) {
    $drawer->setFontColor($color);
    $frame = Imanee::textGen($text, $drawer);
    $base->addFrame($frame);
}

echo $base->animate();
