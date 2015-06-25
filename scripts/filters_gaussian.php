<?php
/* title: Using Filters - Gaussian */
/* description: This example uses the built-in <strong>gaussian</strong> filter */
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

header("Content-type: image/jpg");
$imanee = new Imanee(__DIR__ . '/../resources/img01.jpg');

echo $imanee->applyFilter('filter_gaussian', ['radius' => 5, 'sigma' => 5])
    ->output();