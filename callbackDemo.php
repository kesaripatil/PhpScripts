<?php

$data = [2,3,4];

$result = array_map(function($x) { 
		return $x*$x;
		}, 
	$data);

var_dump($result);

