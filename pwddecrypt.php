<?php
/*
 * Complete the 'decryptPassword' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function decryptPassword($s) {
    // Write your code here
    $result = '';
    $numbers = range('1','9');
    $lowerCase = range('a', 'z');
    $upperCase = range('A', 'Z');
	$numberStack = [];

    for($i = 0; $i < strlen($s); $i++) {
        if(in_array($s[$i], $numbers)) {
        	array_push($numberStack, $s[$i]);
		} else if($s[$i] == '0') {
			$result = $result . array_pop($numberStack);
		} else {
			if(($i < strlen($s)-2) && in_array($s[$i], $upperCase) && in_array($s[$i+1], $lowerCase)) {
				$result = $result . $s[$i+1] . $s[$i];
				$i +=2;
			} else {
				$result = $result . $s[$i];
			}
        }
    }
    return $result;
}

//$s = rtrim(fgets(STDIN), "\r\n");
$s = '51Pa*0Lp*0e';
$result = decryptPassword($s);
echo "Input string : " . $s . "\n";
echo "Result string : " . $result . "\n";
