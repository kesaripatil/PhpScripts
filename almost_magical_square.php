<?php
/*
function solution($matrix) {

	$stepsTaken = 0;
	$sorted = false;
	while(!$sorted) {
		$rowColumnSum = [[0,0,0, 0], [0,0,0, 0]];
		for($r = 0; $r < 3; $r++) {
			$rowSum = $columnSum = 0;
			for($c = 0; $c < 3; $c++) {
				$rowSum += $matrix[$r][$c];
				$columnSum += $matrix[$c][$r];
			}
			$rowColumnSum[0][$r] = $rowSum;
			$rowColumnSum[1][$r] = $columnSum;

//			$rowColumnSum[0][3] += $rowSum;
//			$rowColumnSum[1][3] += $columnSum;
		}
//		echo "** row column sum **\n";
//		var_dump(json_encode($rowColumnSum));
//		if($rowColumnSum[0][3] == $rowColumnSum[1][3]) {
//			$sorted = true;
//		} else {
                	$fixRPosition = $fixCPosition = -1;
	                for($i = 0; $i < 2; $i++) {
        	                if($rowColumnSum[0][$i] < $rowColumnSum[0][$i+1]) {
                	                $fixRPosition = $i;
                        	}       
	                        if($rowColumnSum[0][$i] > $rowColumnSum[0][$i+1]) {
        	                        $fixRPosition = $i+1;
                	        }       

                        	if($rowColumnSum[1][$i] < $rowColumnSum[1][$i+1]) {
                                	$fixCPosition = $i;
	                        }       
        	                if($rowColumnSum[1][$i] > $rowColumnSum[1][$i+1]) {
                	                $fixCPosition = $i+1;
                       		}       

	                        if($fixRPosition != -1 && $fixCPosition != -1) {
        	                        $matrix[$fixRPosition][$fixCPosition] += 1;
                	                $sorted = false;
                        	        $stepsTaken += 1;
                        	}
                	}
	                if($fixRPosition == -1 && $fixCPosition == -1) {
        	                $sorted = true;
               		}
//		}
	}
	return $matrix;
}
*/

function solution($A) {
    // write your code in PHP7.0
	$stepsTaken = 0;
	$sorted = false;
	while(!$sorted) {
		$rowColumnSum = [[0,0,0], [0,0,0]];
		for($r = 0; $r < 3; $r++) {
			$rowSum = $columnSum = 0;
			for($c = 0; $c < 3; $c++) {
				$rowSum += $A[$r][$c];
				$columnSum += $A[$c][$r];
			}
			$rowColumnSum[0][$r] = $rowSum;
			$rowColumnSum[1][$r] = $columnSum;
		}
    	$fixRPosition = $fixCPosition = -1;
        for($i = 0; $i < 2; $i++) {
                if($rowColumnSum[0][$i] < $rowColumnSum[0][$i+1]) {
    	                $fixRPosition = $i;
            	}       
                if($rowColumnSum[0][$i] > $rowColumnSum[0][$i+1]) {
                        $fixRPosition = $i+1;
    	        }       

            	if($rowColumnSum[1][$i] < $rowColumnSum[1][$i+1]) {
                    	$fixCPosition = $i;
                }       
                if($rowColumnSum[1][$i] > $rowColumnSum[1][$i+1]) {
    	                $fixCPosition = $i+1;
           		}       

                if($fixRPosition != -1 && $fixCPosition != -1) {
                        $A[$fixRPosition][$fixCPosition] += 1;
    	                $sorted = false;
            	        $stepsTaken += 1;
            	}
    	}
        if($fixRPosition == -1 && $fixCPosition == -1) {
                $sorted = true;
   		}
	}
	return $A;
}

$test1 = [[0,2,3],[4,1,1],[1,3,1]];
$test2 = [[1,1,1],[2,2,1],[2,2,1]];
$input = $test1;
$output = solution($input);
echo "** Input array **\n";
var_dump(json_encode($input));
echo "** Output array **\n";
var_dump(json_encode($output));

