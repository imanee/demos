<?php
/* title: Generating text-only images */
/* description: Using the static textGen method to generate image from text */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;
use Imanee\Drawer;

header("Content-type: image/png");

$drawer = new Drawer();

$drawer->setFont(__DIR__ . '/../resources/fonts/moderna.ttf')
    ->setFontColor('red')
    ->setFontSize(50);

$text = Imanee::textGen('Imanee!', $drawer, 'png');

echo $text->output();
