<?php
$fp = fopen("php://stdin", "r");

$input = fgets($fp);
$input = explode(" ", trim($input));
$n = $input[0];
$h = $input[1];
$input = fgets($fp);
$hideOuts = explode(" ", trim($input));
$paths = [];
for($i = 0; $i < ($n-1); $i++){
	$input = fgets($fp);
	$input = explode(" ", trim($input));
	if(!isset($paths[$input[0]])){
		$paths[$input[0]] = [];
	}
	array_push($paths[$input[0]], $input[1]);
        if(!isset($paths[$input[1]])){
                $paths[$input[1]] = [];
        }
        array_push($paths[$input[1]], $input[0]);
}
$hideOutPairs = [];
for($i = 0; $i < (count($hideOuts)-1); $i++) {
	for($j = $i+1; $j < count($hideOuts); $j++) {
		array_push($hideOutPairs, array($hideOuts[$i], $hideOuts[$j]));
	}
}

$hideOutPathLengths = [];
for($i = 0; $i < count($hideOutPairs); $i++) {
	$length = 0;
	
}
