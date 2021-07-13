<?php

$testStrings = [];
$oddPrimeNumbersUnder10 = [3,5,7];
$results = [];

$fp = fopen("php://stdin", "r");
$numberOfTestCases = fscanf($fp, "%d");

if(!$numberOfTestCases[0]) {
	echo "Invalid input";
	return false;
}
$numberOfTestCases = $numberOfTestCases[0];
for($i = 0; $i < $numberOfTestCases; $i++) {
	$testStrings[$i] = fgets($fp);
}

for($i = 0; $i < $numberOfTestCases; $i++) {
	$oddSum = $evenSum = 0;
	for($j = 0; $j < strlen(trim($testStrings[$i])); $j++) {
		$asciiVal = ord($testStrings[$i][$j]);
		$j%2 == 0 ? $oddSum+=$asciiVal : $evenSum+=$asciiVal;
	}
	$absDiff = abs($oddSum - $evenSum);
	if($absDiff % 3 == 0 || $absDiff % 5 == 0 || $absDiff % 7 == 0) {
		$results[$i] = "Prime String";
	} else {
		$results[$i] = "Casual String";
	}
	echo $results[$i];
}

