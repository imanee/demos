<?php

include __DIR__ . '/../vendor/autoload.php';

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee\Imanee($res_jpg);

/* produces a proportional thumbnail with maximum dimensions 300 x 300 */
echo $imanee->thumbnail(300, 300)
            ->output();