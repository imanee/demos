<?php
/* title: Rainbow Text Gifs */
/* description: Generates a "rainbow" animated effect in a text */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;
use Imanee\Drawer;

header("Content-type: image/gif");

$text = "Imanee!";
$font = __DIR__ . '/../resources/fonts/moderna.ttf';

$colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];

$base = new Imanee();
$drawer = new Drawer();

$drawer->setFont($font)
    ->setFontSize(40);

foreach ($colors as $color) {
    $drawer->setFontColor($color);
    $frame = Imanee::textGen($text, $drawer);
    $base->addFrame($frame);
}

echo $base->animate(10);
