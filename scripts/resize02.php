<?php

/**
 * produces a smaller image with exact dimensions 300x300 (doesn't care about proportions)
 */

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->resize(300, 300, false);

echo generateBeforeAfter($before, $imanee)->output();
