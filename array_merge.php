<?php

$a1 = array(
	'a' => array('a')
);

$a2 = array(
	'a' => array('b')
);

$result = array_merge($a1, $a2);
var_dump($result);

