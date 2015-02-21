<?php
/* title: Customizing the Drawer Object */
/* description: Customizing font, color and size  with placeText */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");

$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');
$imanee->getDrawer()
    ->setFont(__DIR__ . '/../resources/fonts/almonte_wood.ttf')
    ->setFontSize(100);

$imanee->placeText('testing imanee', Imanee::IM_POS_TOP_CENTER);

$imanee->getDrawer()
    ->setFont(__DIR__ . '/../resources/fonts/moderna.ttf')
    ->setFontColor('green')
    ->setFontSize(50);

echo $imanee->placeText('now in green', Imanee::IM_POS_BOTTOM_CENTER)
        ->output();
