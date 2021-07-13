<?php
$explodedParts = explode('_','kesari_patil_976');
var_dump($explodedParts);
var_dump(end($explodedParts));
$numString = "qe";
$num = 123;

var_dump((int)$numString);
var_dump($num);

var_dump(is_int($numString));
var_dump(is_int($num));

?>
