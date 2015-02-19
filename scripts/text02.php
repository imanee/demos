<?php

/**
 * customizing the Drawer object (changing color, font)
 */

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->getDrawer()
    ->setFont(__DIR__ . '/../resources/fonts/almonte_wood.ttf')
    ->setFontSize(100);

$imanee->placeText('testing imanee', Imanee::IM_POS_TOP_CENTER);

$imanee->getDrawer()
    ->setFont(__DIR__ . '/../resources/fonts/moderna.ttf')
    ->setFontColor('green')
    ->setFontSize(50);

$imanee->placeText('now in green', Imanee::IM_POS_BOTTOM_CENTER);

echo generateBeforeAfter($before, $imanee)->output();
