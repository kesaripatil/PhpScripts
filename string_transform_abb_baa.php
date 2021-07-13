<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($S) {
    // write your code in PHP7.0
	$matchString = "abb";
	$replaceString = "baa";
	$noTransform = false;

	while(!$noTransform) {
		$noTransform = true;
		for($i = 0; $i < strlen($S) - 2; $i++) {
//			echo $i . "\n";
			if(substr($S, $i, 3) == $matchString) {
				$S = substr_replace($S, $replaceString, $i, 3);
				$noTransform = false;
//				echo "String got replaced : " . $S . "\n";
				break;
			}	
		}
//		echo "Transform : " . $noTransform . "\n";
//		sleep(1);
	}
	return $S;
}

$test1 = "ababb";
$test2 = "abbbabb";
$test3 = "aaabab";

$input = $test3;
$result = solution($input);
echo "Input string: " . $input . "\n";
var_dump($result);

