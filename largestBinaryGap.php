<?php

function solution($n) {

//echo "Binary : " . decbin($n) . "\n";
$binN = decbin($n);
$gotStarting1 = false;
$zeroCount = 0;
$maxBinaryGap = 0;
for($i = 0; $i < strlen($binN); $i++){
	if($binN[$i] == 1) {
		if($gotStarting1 == false) {
			$gotStarting1 = true;
		} else {
			$maxBinaryGap = $zeroCount !=0 && $maxBinaryGap < $zeroCount ? $zeroCount : $maxBinaryGap;
			$zeroCount = 0;
		}
	}else {
		$zeroCount++;
	}
}
return $maxBinaryGap;
}

echo "\nexpected : 2 ";
echo solution(9);
echo "\nexpected : 0 ";
echo solution(0);
echo "\nexpected : 1 ";
echo solution(13);
echo "\nexpected : 0 ";
echo solution(7);
echo "\nexpected : 1 ";
echo solution(10);

