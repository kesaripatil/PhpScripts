<?php
$startTime = microtime(true);

function div($dividend, $divisor) {
	
	$count = 0;
	$sign = ($dividend < 0 || $divisor < 0) ? -1 : 1;
	$dividend = abs($dividend);
	$divisor = abs($divisor);
	while(!($dividend < 0)) {
		$dividend = $dividend - $divisor;
		$count++;
	}
	return ($count - 1) * $sign;
}

echo div(-10,3) . "\n";
$endTime = microtime(true);
echo "Start time : " . $startTime . "\n";
echo "End time : " . $endTime . "\n";
echo "Script exec time : " . ($endTime - $startTime);

