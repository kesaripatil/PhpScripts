/**
* 1. find the unique characters from a string
* 2. if character occurence is greater than 1 then continue to step 3 else skip to step 6
* 3. find first and last occurence of the character
* 4. replace substring with blank 
* 5. if remaining string length is zero then STOP else continue to step 1
* 6. if reaches to end of string then STOP else continue to step 2
*/
<?php
function solution($S) {

	while(strlen($S)>1) {
		$noRepeatChar = true;
		for($i = 0; $i < strlen($S)-1; $i++) {	
			$noRepeatChar = true;
			if($S[$i] != "*") {
				$startPosition = $endPosition = $i;
				if(substr_count($S, $S[$i]) > 1) {
					for($j = $i+1; $j < strlen($S); $j++) {
						if($S[$i] == $S[$j]) {
							$endPosition = $j;
							$noRepeatChar = false;
						} else {
							if($startPosition != $endPosition) {
								//$S = substr_replace($S, "*", $startPosition, ($endPosition - $startPosition + 1));
								$i = $j - 1;
								break;
							}
						}
					}
					if($startPosition != $endPosition) {
        	                      		$S = substr_replace($S, "*", $startPosition, ($endPosition - $startPosition + 1));
						echo "\n SP: $startPosition EP: $endPosition S: $S\n";	
					}
				}
			}
		}

		if(!$noRepeatChar) {
			break;
		}
	}
	echo "\n S: $S\n";
	$S = str_replace("*", "", $S);
	return strlen($S);
}

#$input = "abccac";
#$expectedOutput = 1;
#$input = "abcdabcdabcd";
#$expectedOutput = 2;
$input = "axaabyab";
$expectedOutput = 0;
#$input = "ancde";
#$expectedOutput = 5;
#$input = "baaaaa";
#$expectedOutput = 1;

$output = solution($input);

echo "Input: " . $input . "\n";
echo "Expected output: " . $expectedOutput . "\n";
echo "Actual Output: " . $output . "\n";

