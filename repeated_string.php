<?php

function repeatString($s, $n) {

	$i = (int) ($n / strlen($s));
	$r = $n % strlen($s);
	$repeatedString = '';

	echo "i: $i\n";
	echo "r: $r\n";

	for($i; $i > 0; $i--) {
		$repeatedString = $repeatedString . $s;
	}

	if($r > 0) {
		$subPart = substr($s, 0, $r);
		$repeatedString = $repeatedString . $subPart;
	}

	return $repeatedString;
}

function countA($s) {

	return substr_count($s, 'a');
}

$s = 'aba';
$n = 10;
$s = repeatString($s, $n);
echo "Repeated string: ".$s."\n";
$result = countA($s);
echo "Count of a's: " . $result."\n";

