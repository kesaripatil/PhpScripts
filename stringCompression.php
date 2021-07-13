<?php



/*
 * Complete the 'compressedString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING message as parameter.
 */

function compressedString($message) {
    // Write your code here
	if(strlen($message) < 2) {
		return $message;
	}
	$cntRepeatedChar = 1;
	$compressedMessage = $message[0];
	for($i = 1; $i < strlen($message); $i++) {
		if($message[$i-1] == $message[$i]) {
			$cntRepeatedChar++;
		} else {
			if($cntRepeatedChar > 1) {
				$compressedMessage = $compressedMessage . $cntRepeatedChar;
				$cntRepeatedChar = 1;
			}
			$compressedMessage = $compressedMessage . $message[$i];
		}
	}
	if($cntRepeatedChar > 1) {
		$compressedMessage = $compressedMessage . $cntRepeatedChar;
	}
	echo "Compressed string : $compressedMessage\n";
	return $compressedMessage;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$message = rtrim(fgets(STDIN), "\r\n");

$result = compressedString($message);

//fwrite($fptr, $result . "\n");

//fclose($fptr);
