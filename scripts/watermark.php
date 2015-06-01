<?php
/* title: Watermarks */
/* description: Places a watermark with transparency at the bottom right of the image.
   The last parameter is optional and defines the transparency* in percentage (higher = more transparent)<br/>
   <em>*GDResource currently doesn't handle transparency on image compositions.</em>
*/
include __DIR__ . '/../vendor/autoload.php';

use Imanee\Imanee;

$res_jpg = __DIR__ . '/../resources/img01.jpg';
$res_png = __DIR__ . '/../resources/cat01.png';

header("Content-type: image/jpg");
$imanee = new Imanee($res_jpg);

$imanee->watermark($res_png, Imanee::IM_POS_BOTTOM_RIGHT, 30);

echo $imanee->output();
