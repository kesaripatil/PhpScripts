<?php

function socksMerchant($n, $arr) {
	$result = 0;
	$frequencyOfElements = array_count_values($arr);
	foreach($frequencyOfElements as $element => $frequency) {
		$result += (int) ($frequency/2);
	} 
	return $result;
}

$input = [1, 2, 3, 1, 2, 3];
$result = socksMerchant(count($input), $input);
echo "\nInput: " . json_encode($input);
echo "\nOuput: " . $result . "\n";

