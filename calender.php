<?php
$monthsWithDays = array(
	1 => 31,
	2 => 28,
	3 => 31,
	4 => 30,
	5 => 31,
	6 => 30,
	7 => 31,
	8 => 31,
	9 => 30,
	10 => 31,
	11 => 30,
	12 => 31,
);
const DAYSOFWEEK = 7;
$numberOfWeeks = 0;

$fp = fopen("php://stdin","r");
$month = (int) fgets($fp);
$startingDay = (int) fgets($fp);
if($month<=0 || $month>12){
	echo "Invalid month entered";
}
if($startingDay<=0 || $startingDay> DAYSOFWEEK){
	echo "Invalid day of the week";
}
$numberOfWeeks = $monthsWithDays[$month]/DAYSOFWEEK;
$remainingDays = $monthsWithDays[$month]%DAYSOFWEEK;

if($month == 2 && $startingDay == 1){
	$numberOfWeeks+=0;
}else if($startingDay + $remainingDays - 1 <= DAYSOFWEEK){
	$numberOfWeeks+=1;
}else{
	$numberOfWeeks+=2;
}
echo number_format($numberOfWeeks);

