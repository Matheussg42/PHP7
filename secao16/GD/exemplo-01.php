<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 4, 60, 120, "Curso PHP7", $red);

imagepng($image);

imagedestroy($image);