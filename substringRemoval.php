<?php

function solution($S) {

	for($sp = 0; $sp < strlen($S) - 1; $sp++) {
		$ep = $sp;
		for($i = $sp+1; $i < strlen($S); $i++) {
			if($S[$sp] == $S[$i]){
				$ep = $i;	
			} else {
				if($sp != $ep) {
					break;					
				}
			}
		}
		if($sp != $ep) {
			$S = substr_replace($S, "", $sp, $ep+1);
			$sp = -1;
		}
	}
	return strlen($S);
}

#$input = "abccac";
#$expectedOutput = 1;
#$input = "abcdabcdabcd";
#$expectedOutput = 2;
#$input = "axaabyab";
#$expectedOutput = 0;
#$input = "ancde";
#$expectedOutput = 5;
$input = "baaaaa";
$expectedOutput = 1;

$output = solution($input);

echo "Input: " . $input . "\n";
echo "Expected output: " . $expectedOutput . "\n";
echo "Actual Output: " . $output . "\n";

