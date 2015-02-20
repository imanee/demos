<?php

/**
 * creates an animated gif based on images from a directory glob pattern
 */

include "common.php";

use Imanee\Imanee;

header("Content-type: image/gif");

echo Imanee::globAnimate(__DIR__ . '/../resources/*.png');
