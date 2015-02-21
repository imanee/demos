<?php
/* title: Writing Text */
/* description: Writing text with default Drawer and using relative positioning  */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");
$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');

echo $imanee->placeText('testing imanee', Imanee::IM_POS_MID_CENTER)
    ->output();
