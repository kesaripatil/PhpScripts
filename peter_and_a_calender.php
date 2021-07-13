<?php

$daysOfMonth = array(
	'1' => 31,
	'2' => 28,
	'3' => 31,
	'4' => 30,
	'5' => 31,
	'6' => 30,
	'7' => 31,
	'8' => 31,
	'9' => 30,
	'10' => 31,
	'11' => 30,
	'12' => 31
);
$fp = fopen("php://stdin", 'R');

$month = (int) fgets($fp);
$day = (int) fgets($fp);
echo "Entered month is : " . $month . "\n";
echo "Entered day is : " . $day . "\n";
echo "Days in given month is : ", $daysOfMonth[$month] . "\n";
$quetient = $daysOfMonth[$month]/7;
echo "Main week columns : " . $quetient . "\n";
$remaining = $daysOfMonth[$month]%7;
echo "Main week remaining : " . $remaining . "\n";
$remaining = $day + $remaining - 1;
echo "Processed remaining : " . $remaining . "\n";
$remainQue = $remaining / 7;
echo "Remain quetiant : " . $remainQue . "\n";
$remaining = $remaining % 7;
echo "Final Remain : " . $remaining . "\n";
if($remaining > 0) {
	$remaining = 1;
}
echo "Number of columns needed : " . (int) ($quetient + $remainQue + $remaining) . "\n";

