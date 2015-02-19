<?php

/**
 * basic text writing using the default Drawer and relative positioning.
 */

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->placeText('testing imanee', Imanee::IM_POS_MID_CENTER);

echo generateBeforeAfter($before, $imanee)->output();
