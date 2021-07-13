<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
	// write your code in PHP7.0
//	echo "Max element of A is : " . max($A) . "\n";
	if(max($A) <= 0 or min($A) > 1) {
//		echo "As max is <=0, returning 1\n";
		return 1;
	}
	sort($A);
//	echo "Sorted array is : ";
//	var_dump($A);
//	echo "\n";
	$minInt = 0;
//	echo "Inital min int value is : " . $minInt . "\n";
	for($i = 0; $i < count($A) - 1; $i++){
//		echo "Checking index " . $i+1 . " : " . $A[$i+1] . " to " . $i . " : " . $A[$i] . "\n";
//		echo "Comparing " . $A[$i+1] . " with " . $A[$i] . "\n";
		if($A[$i] <= 0 OR ($A[$i+1] - $A[$i]) <= 1) {
//			echo "1 or 0 value gap\n";
			continue;
		} else {
//			echo "More than 1 value gap\n";
			$minInt = $A[$i]+1;
//			echo "So min int will be : " . $minInt . "\n";
			break;
		}
	}
	if($minInt == 0) {
//`		echo "Array is completely sorted so assigning max value plus 1\n";
		$minInt = $A[count($A) - 1] + 1;
	}
//	echo "Final min int value is : " . $minInt."\n";
	if($minInt >= 1000000) {
		$minInt = 1;	
	}
	return $minInt;
}

//$A = [-4, -1, -2];
$A = [1,1,1];
//$A = [1,3,5,9];
//$A = [1, 3, 6, 4, 1, 2];
echo solution($A);
