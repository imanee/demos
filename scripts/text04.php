<?php

/**
 * writing with absolute positioning (using coordinates)
 */

include "common.php";

use Imanee\Imanee;
use Imanee\Drawer;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->annotate('testing Imanee', 20, 50, 40);

echo generateBeforeAfter($before, $imanee)->output();
