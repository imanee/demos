<?php
/* title: Using Filters - Color */
/* description: This example uses the built-in <strong>color</strong> filter */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");
$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');

echo $imanee->applyFilter('filter_color', ['color' => 'red'])
    ->output();
