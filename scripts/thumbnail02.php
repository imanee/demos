<?php

/**
 * produces a cropped thumbnail with exact size 200x200 (centered cropping)
 */

include "common.php";

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee($res_jpg);
$before = clone $imanee;

$imanee->thumbnail(200, 200, true);

echo generateBeforeAfter($before, $imanee)->output();
