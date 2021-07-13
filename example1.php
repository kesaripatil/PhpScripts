<?php
$a = '4';
$b = &$a;
$b = '2$b';
echo $a . ", " . $b;

