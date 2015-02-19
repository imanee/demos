<?php

/**
 * produces a proportional thumbnail with maximum dimensions 300 x 300
 */

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->thumbnail(300, 300);

echo generateBeforeAfter($before, $imanee)->output();
