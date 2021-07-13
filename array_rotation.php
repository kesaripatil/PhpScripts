<?php

function solution($A, $K) {

	if(empty($A)) {
		return $A;
	}
	for($i = 0; $i<$K; $i++) {
		$lastElem = array_pop($A);
		array_unshift($A, $lastElem);
	}
	return $A;
}

echo "\nExpected : [2,3,4,1]";
print_r(solution([1,2,3,4], 3));
echo "\nExpected : [4,1,2,3]";
print_r(solution([1,2,3,4], 5));
