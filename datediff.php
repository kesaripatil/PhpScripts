<?php
//datediff();
//echo datediff(CURDATE(), '2020-11-09 00:00:00');

/*
$laterDate = date_create('2020-11-12');
$currentDate = date_create('2020-11-11');

$diff = date_diff($laterDate,  $currentDate);
echo $diff->format('%a');
*/

/*$laterDate = '2020-11-15';
$laterSecs = strtotime($laterDate);
$curSecs = strtotime('now');
$secDiff = $laterSecs - $curSecs;
echo $secDiff;
$dt = new DateTime("@$secDiff");
echo $dt->format('%a');*/

echo date('Y-m-d H:i:s');

