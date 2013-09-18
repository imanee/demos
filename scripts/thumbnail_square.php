<?php

include __DIR__ . '/../vendor/autoload.php';

$res_jpg = __DIR__ . '/../resources/img01.jpg';

header("Content-type: image/jpg");

$imanee = new Imanee\Imanee($res_jpg);

/* produces a square thumbnail of 300 x 300 with a centered-crop  */
echo $imanee->thumbnail(300, 300, true)
            ->output();