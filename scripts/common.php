<?php

include __DIR__ . '/../../imanee/vendor/autoload.php';

use Imanee\Imanee;

function generateBeforeAfter(Imanee $before, Imanee $after)
{
    $result = new Imanee();
    $resWidth = $before->getWidth() + $after->getWidth();
    $resHeight = $before->getHeight() >= $after->getHeight() ? $before->getHeight() : $after->getHeight();

    $result->newImage($resWidth, $resHeight);
    $result->compositeImage($before, 0, 0);
    $result->compositeImage($after, $before->getWidth(), 0);

    $result->placeText('before', Imanee::IM_POS_BOTTOM_LEFT);
    $result->placeText('after', Imanee::IM_POS_BOTTOM_RIGHT);

    return $result;
}
