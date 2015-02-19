<?php

/**
 * produces a smaller image that fits in the area 300x300
 */

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->resize(300, 300);

echo generateBeforeAfter($before, $imanee)->output();
