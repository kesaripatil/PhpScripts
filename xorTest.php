<?php
$x = 9;
$y = 5;
$z = 4;

$z = ($z ^ $x) ^ $y;
$y = $y ^ $x;
$x = $x ^ 3;

echo $x + $y + $z;

