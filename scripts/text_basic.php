<?php

include __DIR__ . '/../vendor/autoload.php';

$res_jpg = __DIR__ . '/../resources/img01.jpg';
$res_png = __DIR__ . '/../resources/cat01.png';

header("Content-type: image/jpg");

$imanee = new Imanee\Imanee($res_jpg);

/* basic text writing using the default Drawer and relative positioning. the relative positioning is not 100% reliable because it depends on the font. */
echo $imanee->placeText('imanee', 40, \Imanee\Imanee::IM_POS_MID_CENTER)
            ->output();