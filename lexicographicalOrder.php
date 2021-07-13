<?php

function solution($S, $K) {
    
	echo "Original String: " . $S . "\n";
	echo "Rounds: " . $K . "\n";
	$stringPointer = 0;
	for($i = 0 ;$i < $K; $i++) {
		if(!($stringPointer < (strlen($S) - 1))) {
			$stringPointer = 0;
		}
		if(ord($S[$stringPointer]) > ord($S[$stringPointer + 1])) {
			$temp = $S[$stringPointer];
			$S[$stringPointer] = $S[$stringPointer+1];
			$S[$stringPointer+1] = $temp;
			$stringPointer = 0;
		} else {
			$i--;
			$stringPointer++;
		}
//		$stringPointer++;
		echo("-- AFTER $i th round: " . $S . "\n");
	}
	echo "Return String: ". $S . "\n";
	return $S;
}

//$string = 'abracadabra';
//$steps = 15;

$string = 'decade';
$steps = 4;

echo solution($string, $steps);

/*

Original String: decade
Rounds: 4
-- AFTER -1 th round: decade
-- AFTER 0 th round: dceade
-- AFTER 0 th round: dceade
-- AFTER 0 th round: dceade
-- AFTER 1 th round: cdeade
-- AFTER 2 th round: cdaede
-- AFTER 2 th round: cdaede
-- AFTER 2 th round: cdaede
-- AFTER 3 th round: cadede
Return String: cadede


*/
