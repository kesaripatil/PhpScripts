<?php

/*
* @uses To count valleys or mountain hiked by hiker
* @param $steps - Number of steps taken by hiker
* @param $stepsString - Step sequence taken by hiker
* @param $type - {'D', 'U'} - Represent whether function to count valley or mountain
*/
function countValleys_Mountains($steps, $stepsString, $type) {

	$stack = [];
	$flag = false;
	$count = 0;
	for($i = 0; $i< $steps; $i++) {
		if($stepsString[$i] == $type) {
			if(empty($stack)) {
				$flag = true;
				array_push($stack, $stepsString[$i]);
			} else {
				if($stack[count($stack)-1] != $stepsString[$i]) {
                                        array_pop($stack);
                                } else {
                                        array_push($stack, $stepsString[$i]);
                                }
			}
		} else {
			if(empty($stack)) {
				array_push($stack, $stepsString[$i]);
			} else {
				if($stack[count($stack)-1] != $stepsString[$i]) {
					array_pop($stack);
				} else {
					array_push($stack, $stepsString[$i]);
				}
			}
		}
		
		if($flag == true && empty($stack)){
			$count++;
			$flag = false;
		}
	}
	return $count;
}

$input = 'UDDDUDUU';
$type = 'D';
$output = countValleys_Mountains(strlen($input), $input, $type);
$typeText = $type == 'D' ? 'Vallies' : 'Moutains';
echo "Count of " . $typeText . ' traversed: ' . $output . "\n";

